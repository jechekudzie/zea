<?php

namespace App\Http\Controllers;


use App\Models\Member;
use App\Models\MemberBeneficiary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use function Livewire\str;

class MemberBeneficiaryController extends Controller
{
    public function index(Member $member)
    {
        return view('members.institution_members.index', compact('member'));
    }

    public function create(Member $member)
    {
        return view('members.institution_members.create', compact('member'));

    }

    public function add_member(Member $member)
    {
        $beneficiary = request('beneficiary');
        if ($member->member_beneficiaries) {
            if ($member->member_beneficiaries->count() >= 10) {
                return back()->with('message', 'You can not add this member, you have reached a maximum number of 10 allocated beneficiaries.');
            } else {
                if (MemberBeneficiary::where('beneficiary', $member->id)->first() != null) {
                    return back()->with('message', 'You can not add yourself as a beneficiary.');
                } else {
                    $beneficiary_to_be_added = Member::where('id', $beneficiary)->first();
                    if (strtolower($beneficiary_to_be_added->member_category->name) == 'institution') {
                        return back()->with('message', 'You can not add ' . $beneficiary_to_be_added->name . ' institution as a beneficiary.');
                    } else {
                        $member_beneficiary = $member->add_member_beneficiary(request()->validate([
                            'beneficiary' => ['required', 'unique:member_beneficiaries']
                        ], [

                            'beneficiary.unique' => 'This member has already been added to ' . $member->name . ' as an institutional beneficiary!'

                        ]));

                        //check if beneficiary have an active subscription or not
                        if ($member->member_subscriptions->count() > 0) {
                            $last_institution_subscription = $member->member_subscriptions->last();

                            if ($last_institution_subscription->expiry_date > date('Y-m-d')) {

                                if($last_institution_subscription->compliance_status_id == 3){
                                    $compliance_status = 3;
                                }else{
                                    $compliance_status = 1;
                                }
                                $subs = app('App\Http\Controllers\MemberSubscriptionController')->check_subs_existence($beneficiary_to_be_added, $compliance_status);
                            }

                        }

                        try {
                            Mail::to($beneficiary_to_be_added->member_contact->contact_email)->send(new \App\Mail\InstitutionalMemberAdded($member, $beneficiary_to_be_added));
                        } catch (\Exception $exception) {
                            Log::error($exception);
                        }
                        return back()->with('message', 'Member beneficiary has been successfully added to the institution!');
                    }
                    return back();
                }
            }

        }
    }

    public function send_invite(Member $member)
    {

        $invitee = request()->validate([
            'email' => ['required', 'email'],
            'name' => ['required'],
        ]);

        try {
            Mail::to($invitee['email'])->send(new \App\Mail\RegistrationInvite($member, $invitee));
        } catch (\Exception $exception) {
            Log::error($exception);
        }

        return back()->with('message', 'Invite has been successfully sent to ' . $invitee['name'] . ' with email address ' . $invitee['email']);
    }

}
