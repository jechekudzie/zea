<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $members = Member::all();
        return view('admin.index', compact('members'));
    }
}
