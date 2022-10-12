<?php

namespace App\Http\Controllers;
use App\Models\MemberCategory;
use App\Models\MemberCategoryFee;
use Illuminate\Http\Request;

class MemberCategoryController extends Controller
{
    public function index()
    {
        $member_categories = MemberCategory::all();
        return view('admin.member_categories.index',compact('member_categories'));
    }

    public function create()
    {
        return view('admin.member_categories.create');
    }

    public function store()
    {
        MemberCategory::create(request()->validate([
            'category_id' => ['required', 'unique:member_category'],
            'name' => ['required'],
            'description' => ['nullable'],
            'benefits' => ['nullable'],

        ]));

        return back()->with('message', 'category added successfully.');
    }

    public function show(MemberCategory $member_category)
    {
        return view('admin.member_categories.show',compact('member_category'));
    }

    public function edit(MemberCategory $member_category)
    {
        //
        return view('admin.member_categories.edit',compact('member_category'));
    }

    public function update(MemberCategory $member_category)
    {
        $member_category->update(request()->validate([
            'name' => ['required'],
            'description' => ['nullable'],
            'benefits' => ['nullable'],
        ]));
        return redirect('/admin/member_categories')->with('message', 'member category updated successfully.');
    }

    public function destroy(MemberCategory $member_category)
    {
        $member_category->delete();
        return redirect('admin/member_categories');
    }
}
