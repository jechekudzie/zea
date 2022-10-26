<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\MemberSubscription;
use App\Models\Payment;
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

        return view('members.member_subscriptions.create',
            compact('member', 'amount_invoiced', 'subscription_fee', 'balance'));
    }


    public function store(Member $member)
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

}
