<?php

namespace App\Http\Controllers;

use App\Models\MemberCategory;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
        $member_categories = MemberCategory::all();

        return view('index', compact('member_categories'));
    }

    public function about()
    {
        return view('website.about');
    }

    public function about_our_history()
    {
        return view('website.about_our_history');
    }

    public function about_leadership()
    {
        return view('website.about_leadership');
    }

    public function members()
    {
        return view('website.members');
    }

    public function member_benefits()
    {
        return view('website.membership.member_benefits');
    }

    public function member_directories()
    {
        return view('website.membership.member_directories');
    }
}
