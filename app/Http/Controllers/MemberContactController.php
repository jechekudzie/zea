<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\IdentificationType;
use App\Models\Member;
use App\Models\MemberCategory;
use App\Models\MemberContact;
use App\Models\Province;
use Illuminate\Http\Request;

class MemberContactController extends Controller
{
    public function index()
    {
        $member_contacts = MemberContact::all();
        return view('members.contacts.index', compact('member_contacts'));
    }

    public function create(Member $member)
    {
        $provinces = Province::all();
        $cities = City::all();
        return view('members.index', compact('member', 'provinces', 'cities'));
    }

    public function store(Member $member)
    {
        $member->add_member_contact(request()->validate([
            'province_id' => ['required'],
            'city_id' => ['required'],
            'physical_address' => ['required'],
            'contact_email' => ['required', 'email'],
            'contact_number' => ['required'],
        ]));

        return redirect('/members/' . $member->id);
    }

    public function show(MemberContact $member_contact)
    {
        return view('members.contact.show', compact('member_contact'));
    }

    public function edit(MemberContact $member_contact)
    {
        $provinces = Province::all();
        $cities = City::all();
        return view('members.contact.edit', compact('member_contact', 'provinces', 'cities'));
    }

    public function update(MemberContact $member_contact)
    {
        $member_contact->update(request()->validate([
            'province_id' => ['required'],
            'city_id' => ['required'],
            'physical_address' => ['required'],
            'contact_email' => ['required', 'email'],
            'contact_number' => ['required'],
        ]));
        return redirect('/members/' . $member_contact->member->id);
    }

    public function destroy(MemberContact $member_contact)
    {
        $member = $member_contact->member;
        $member_contact->delete();
        return redirect('/members/' . $member->id);
    }
}
