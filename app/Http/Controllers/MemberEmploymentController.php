<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Member;
use App\Models\MemberEmployment;
use App\Models\Province;
use Illuminate\Http\Request;

class MemberEmploymentController extends Controller
{
    //
    public function index()
    {
        $member_employments = MemberEmployment::all();
        return view('members.employments.index', compact('member_employments'));
    }

    public function create(Member $member)
    {

        return view('members.index', compact('member'));
    }

    public function store(Member $member)
    {
        $member->add_member_employment(request()->validate([
            'company' => ['required'],
            'occupation' => ['required'],
            'position' => ['required'],
            'qualification' => ['required'],
        ]));

        return redirect('/members/' . $member->id);
    }

    public function show(MemberEmployment $member_employment)
    {
        return view('members.employment.show', compact('member_employment'));
    }

    public function edit(MemberEmployment $member_employment)
    {

        return view('members.employment.edit', compact('member_employment'));
    }

    public function update(MemberEmployment $member_employment)
    {
        $member_employment->update(request()->validate([
            'company' => ['required'],
            'occupation' => ['required'],
            'position' => ['required'],
            'qualification' => ['required'],
        ]));
        return redirect('/members/' . $member_employment->member->id);
    }

    public function destroy(MemberEmployment $member_employment)
    {
        $member = $member_employment->member;
        $member_employment->delete();
        return redirect('/members/' . $member->id);
    }
}
