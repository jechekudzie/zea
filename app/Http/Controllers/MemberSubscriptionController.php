<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\MemberSubscription;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Paynow\Payments\Paynow;

class MemberSubscriptionController extends Controller
{
    //

    public function index(Member $member)
    {
        return view('members.member_subscriptions.index', compact('member'));
    }

    public function create(Member $member)
    {

        $balance = 0.00;
        $subscription_fee = $member->member_category->member_category_fee->subscription_fee;

        if ($member->member_subscriptions->count() > 0) {

            $balance = $member->member_subscriptions->sum('balance');
        }

        $amount_invoiced = $member->member_category->member_category_fee->subscription_fee;
        $payment_methods = PaymentMethod::all();

        $current_rate = Rate::find(1)->rate;

        return view('members.member_subscriptions.create',
            compact('member', 'amount_invoiced',
                'subscription_fee', 'balance', 'payment_methods', 'current_rate'));
    }

    public function payment_details(Member $member)
    {
        $payment_details = request()->validate([
            'payment_method_id' => ['required'],
            'amount_invoiced' => ['required'],
            'currency' => ['required'],
            'current_rate' => ['required'],
        ]);
        $payment_method = PaymentMethod::find($payment_details['payment_method_id']);

        if ($payment_details['currency'] == 'zwl') {
            $payment_details['amount_invoiced'] = $payment_details['amount_invoiced'] * $payment_details['current_rate'];
        }
        $payment_details['member_id'] = $member->id;
        $payment_details['payment_method'] = strtolower($payment_method->name);

        Session::put('payment', $payment_details);

        $currency = $payment_details['currency'];


        return view('members.member_subscriptions.submit_payment_details', compact('member', 'payment_details', 'currency', 'payment_method'));
    }

    public function submit_payment_details(Member $member)
    {
        $proof_of_payment = '';

        $payment = Session::get('payment');
        if ($payment['payment_method'] == 'ecocash') {
            $data = request()->validate([
                'amount_paid' => ['required'],//mobile number
                'reference_number' => ['required'],//mobile number
                'proof_of_payment' => ['required'],//ecocah reference number
            ]);
        }
        if ($payment['payment_method'] == 'transfer') {
            $data = request()->validate([
                'amount_paid' => ['required'],
                'reference_number' => ['required'],//transaction reference number from POP or Deposit slip
            ]);

            if (request()->hasfile('proof_of_payment')) {

                $file = request()->file('proof_of_payment');

                //get file original name
                $name = $file->getClientOriginalName();

                //create a unique file name using the time variable plus the name
                $file_name = time() . $name;

                //upload the file to a directory in Public folder
                $proof_of_payment = $file->move('proof_of_payments', $file_name);

                $data['proof_of_payment'] = $proof_of_payment;
            }
        }

        if ($payment['payment_method'] == 'cash') {
            $data = request()->validate([
                'amount_paid' => ['required'],
                'reference_number' => ['nullable'],
            ]);
        }

        $balance = $payment['amount_invoiced'] - $data['amount_paid'];

        if ($balance <= 0) {
            $compliance_status = 1;
            $payment_status_id = 1;
        } else {
            $compliance_status = 2;
            $payment_status_id = 2;
        }
        if ($member->member_subscriptions->count() > 0) {

            $last_subscription = $member->member_subscriptions->last();
            $last_subscription_expiry_date = $last_subscription->expiry_date;

            if ($last_subscription_expiry_date < date('Y-m-d')) {
                $start_date = date('Y-m-d');
                $expiry_date = Date('Y-m-d', strtotime('+' . 365 . ' days'));
                $member_subscription = $this->create_subscription($member->id, $member->member_category_id, $compliance_status, $start_date, $expiry_date);

            } else {
                $start_date = $last_subscription_expiry_date;
                $expiry_date = date('Y-m-d', strtotime($start_date . ' + 365 days'));
                $member_subscription = $this->create_subscription($member->id, $member->member_category_id, $compliance_status, $start_date, $expiry_date);

            }
        } else {
            $start_date = Date('Y-m-d');
            $expiry_date = Date('Y-m-d', strtotime('+' . 365 . ' days'));
            $member_subscription = $this->create_subscription($member->id, $member->member_category_id, $compliance_status, $start_date, $expiry_date);
        }

        $member_subscription_payment = $member_subscription->create_payment([
            'period' => date('Y'),
            'member_id' => $member->id,
            'currency' => $payment['currency'],
            'current_rate' => $payment['current_rate'],
            'amount_invoiced' => $payment['amount_invoiced'],
            'amount_paid' => $data['amount_paid'],
            'balance' => $balance,
            'payment_method_id' => $payment['payment_method_id'],
            'payment_status_id' => $payment_status_id,
            'reference_number' => $data['reference_number'],
            'proof_of_payment' => $proof_of_payment,
        ]);

        return redirect('members/' . $member->id)->with('message', 'Subscription is now active and your payment was successful.');
    }

    public function create_subscription($member, $member_category, $compliance_status, $start_date, $expiry_date)
    {
        $member = Member::find($member);
        $subscription = MemberSubscription::create([
            'period' => date('Y'),
            'member_id' => $member->id,
            'member_category_id' => $member->member_category_id,
            'compliance_status_id' => 3,
            'start_date' => $start_date,
            'expiry_date' => $expiry_date,
        ]);

        return $subscription;
    }

    public function paynow(Member $member)
    {
        $subscription = request()->validate([
            'period' => 'required',
            'amount_invoiced' => 'required',
        ]);

        if ($check_existence = MemberSubscription::where('period', $subscription['period'])->first()) {
            return back()->with('message', 'You already have an existing subscription for this period.');
        }

        if ($subscription['period'] < date('Y')) {
            return back()->with('message', 'You can not make a subscription for previous years.');
        }

        $member_subscription = MemberSubscription::create([
            'member_id' => $member->id,
            'member_category_id' => $member->member_category->id,
            'period' => $subscription['period'],
        ]);

        $payment['subscription_id'] = $member_subscription->id;
        $payment['period'] = $member_subscription->period;
        $payment['amount_invoiced'] = $subscription['amount_invoiced'];
        $payment['amount_paid'] = $subscription['amount_invoiced'];


        $id = time() . $subscription['amount_invoiced'];
        $paynow = new Paynow
        (
            '5865',
            '23962222-9610-4f7c-bbd5-7e12f19cdfc6',
            'http://localhost:8000/members/subscriptions/' . $member_subscription->id . '/check_payment',
            'http://localhost:8000/members/subscriptions/' . $member_subscription->id . '/check_payment'
        );
        //create a payment and add items required
        $paynow_payment = $paynow->createPayment($id, 'nigel@leadingdigital.africa');
        $paynow_payment->add('Subscription', $subscription['amount_invoiced']);
        //initiate payment
        $response = $paynow->send($paynow_payment);

        //check if initiation was a success
        if ($response->success()) {

            // Or if you prefer more control, get the link to redirect the user to, then use it as you see fit
            $payment_link = $response->redirectUrl();
            // Get the poll url (used to check the status of a transaction). You might want to save this in your DB
            $pollUrl = $response->pollUrl();

            $payment['poll_url'] = $pollUrl;

            session()->put('payment', $payment);

            return redirect($payment_link);

        } else {

            return redirect('/members/subscriptions/' . $member->id . '/create');
        }
    }

    public function check_payment(MemberSubscription $member_subscription)
    {
        $payment = Session::get('payment');

        //dd($payment['amount_invoiced']);
        $poll_url = $payment['poll_url'];
        $paynow = new Paynow
        (
            '5865',
            '23962222-9610-4f7c-bbd5-7e12f19cdfc6',
            'http://localhost:8000/members/subscriptions/' . $member_subscription->id . '/check_payment',
            'http://localhost:8000/members/subscriptions/' . $member_subscription->id . '/check_payment'
        );
        //paynow data
        $paynow_data = $paynow->pollTransaction($poll_url);
        $status = $paynow_data->status();
        $ref = $paynow_data->reference();
        $paynowref = $paynow_data->paynowreference();

        //add to payment
        $payment['status'] = $status;
        $payment['reference'] = $ref;
        $payment['paynowreference'] = $paynowref;

        if ($status == 'Paid' || $status == 'Delivered' || $status == 'Awaiting Delivery') {
            $member_subscription_payment = Payment::create([
                'period' => $member_subscription->period,
                'member_subscription_id' => $member_subscription->id,
                'member_id' => $member_subscription->member->id,
                'amount_invoiced' => $payment['amount_invoiced'],
                'amount_paid' => $payment['amount_invoiced'],
                'proof_of_payment' => $payment['paynowreference'],
                'poll_url' => $payment['poll_url'],
            ]);

            $member_subscription->update([
                'compliance_status_id' => 2
            ]);
            return redirect('/members/' . $member_subscription->member->id)->with('message', 'Payment was successful, your reference number is
            ' . $payment['paynowreference']);

        } elseif ($status == 'Cancelled') {
            return redirect('/members/' . $member_subscription->member->id)->with('message', 'You have cancelled the
            payment hence np funds were credited to our account, your reference number is ' . $payment['paynowreference']);
        } else {
            return redirect('/members/' . $member_subscription->member->id)->with('message', 'Your transaction was not successful, please
            try again later of contact our accounting ,your reference number is  ' . $payment['paynowreference']);
        }
    }

    public function show(MemberSubscription $memberSubscription)
    {
        $member = $memberSubscription->member;
        return view('members.member_subscriptions.show', compact('memberSubscription', 'member'));
    }

    public function verify_subscription(MemberSubscription $memberSubscription)
    {
        $member = $memberSubscription->member;
        $memberSubscription->update([

            'compliance_status_id' => 1
        ]);
        return redirect('/members/' . $member->id)->with('message', 'The Subscription starting
        ' . date('Y-m-d', strtotime($memberSubscription->start_date)).' has been succesfuly verified'
        );
        //notification comes here
    }


}
