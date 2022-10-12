<?php

namespace App\Http\Controllers;

use App\Models\MemberCategory;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function home()
    {
        $member_categories = MemberCategory::all();
        return view('index', compact('member_categories'));
    }
}
