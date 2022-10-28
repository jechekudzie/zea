<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Gender;
use App\Models\IdentificationType;
use App\Models\Member;
use App\Models\MemberCategory;
use App\Models\Province;
use App\Models\Title;
use App\Models\UserMember;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    //


    public function index()
    {
        $members = Member::all()->sortBy('id');
        return view('members.index', compact('members'));
    }

    public function create()
    {
        $member_categories = MemberCategory::all();
        $identification_types = IdentificationType::all();
        $provinces = Province::all();
        $cities = City::all();
        $genders = Gender::all();
        $titles = Title::all();
        return view('members.create', compact('member_categories', 'identification_types',
            'provinces', 'cities', 'genders', 'titles'));
        //return view('members.create', compact('member_categories', 'identification_types'));
    }

    public function create_institution()
    {
        $identification_types = IdentificationType::whereIn('id', [4])->get();
        $provinces = Province::all();
        $cities = City::all();
        $genders = Gender::all();
        $titles = Title::all();
        return view('members.create_institution', compact('identification_types',
            'provinces', 'cities', 'genders', 'titles'));
        //return view('members.create', compact('member_categories', 'identification_types'));
    }

    public function store()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $member_category_id = $user->member_category_id;
            if (strtolower($user->member_category->name) == 'student' || strtolower($user->member_category->name) == 'individual') {
                $member = Member::create(request()->validate([
                    'title_id' => ['required'],
                    'gender_id' => ['required'],
                    'dob' => ['required'],
                    'identification_type_id' => ['required'],
                    'identification' => ['required'],
                    'name' => ['required', 'min:3'],
                ]));
            } else {
                $member = Member::create(request()->validate([
                    'dob' => ['required'],
                    'identification_type_id' => ['required'],
                    'identification' => ['required'],
                    'name' => ['required', 'min:3'],
                ]));

            }
            $member->update([
                'member_category_id' => $member_category_id
            ]);

            $member->add_member_contact(request()->validate([
                'province_id' => ['required'],
                'city_id' => ['required'],
                'physical_address' => ['required'],
                'contact_email' => ['required'],
                'contact_number' => ['required'],
            ]));
            $member->add_member_employment(request()->validate([
                'company' => ['nullable'],
                'occupation' => ['nullable'],
                'position' => ['nullable'],
                'qualification' => ['nullable'],
                'start_date' => ['nullable'],
                'end_date' => ['nullable'],
            ]));

            if ($user = Auth::user()) {
                UserMember::create([
                    'user_id' => $user->id,
                    'member_id' => $member->id,
                ]);
            }
            if (strtolower($member->member_category->name) == 'institution') {
                $prefix = 'IM';
            } else {
                $prefix = 'IN';
            }
            $member->update([
                'member_registration_number' => $prefix . str_pad($member->id, 4, 0, STR_PAD_LEFT)
            ]);
            return redirect('/members/' . $member->id);
        } else {
            return redirect('/login');
        }
    }

    public function show(Member $member)
    {
        /*if ($member->member_beneficiaries->count() > 0) {
            foreach ($member->member_beneficiaries as $member_beneficiary) {

                dd($member_beneficiary->get_beneficiary_member($member_beneficiary->beneficiary)->member_category->name);
            }
        }*/

        return view('members.show', compact('member'));
    }

    public function edit(Member $member)
    {
        $member_categories = MemberCategory::all();
        $identification_types = IdentificationType::all();
        return view('members.edit', compact('member', 'member_categories', 'identification_types'));
    }

    public function update(Member $member)
    {
        $member->update(request()->validate([
            'member_category_id' => ['required'],
            'identification_type_id' => ['required'],
            'identification' => ['required'],
            'name' => ['required', 'min:3'],
        ]));
        return redirect('/members/' . $member->id);
    }

    public function destroy(Member $member)
    {
        if ($member->member_contact()) {
            $member->member_contact->delete();
        }
        if ($member->member_employment) {
            $member->member_employment->delete();
        }

        if ($member->member_subscriptions()) {
            $member->member_subscriptions->delete();
        }
        return redirect('/members');
    }
}
