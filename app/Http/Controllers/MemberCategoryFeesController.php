<?php

namespace App\Http\Controllers;

use App\Models\MemberCategory;
use App\Models\MemberCategoryFee;
use Illuminate\Http\Request;

class MemberCategoryFeesController extends Controller
{
    public function index()
    {
        $member_category_fees = MemberCategoryFee::all();
        return view('admin.fees.index', compact('member_category_fees'));
    }

    public function create()
    {

        $member_categories = MemberCategory::all();
        return view('admin.fees.create', compact('member_categories'));
    }

    public function store()
    {
        MemberCategoryFee::create(request()->validate([
            'member_category_id' => ['required', 'unique:member_category_fees'],
            'subscription_fee' => ['required'],
        ]));

        return back()->with('message', 'fee added successfully.');
    }

    public function show(MemberCategoryFee $member_category_fee)
    {
        return view('admin.fees.show', compact('member_category_fee'));
    }

    public function edit(MemberCategoryFee $member_category_fee)
    {
        //
        $member_categories = MemberCategory::all();
        return view('admin.fees.edit', compact('member_categories', 'member_category_fee'));
    }

    public function update(MemberCategoryFee $member_category_fee)
    {
        $member_category_fee->update(request()->validate([
            'member_category_id' => ['required'],
            'subscription_fee' => ['required'],
        ]));
        return redirect('/admin/member_category_fees')->with('message', 'fee updated successfully.');
    }

    public function destroy(MemberCategoryFee $member_category_fee)
    {
        $member_category_fee->delete();
        return redirect('admin/member_category_fees');
    }

}
