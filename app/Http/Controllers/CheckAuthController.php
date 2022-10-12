<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class CheckAuthController extends Controller
{
    //
    public function user_has_member_account()
    {
        $user = Auth::user();

        if ($user->roles) {
            if ($user->hasRole('Admin')) {
                return redirect('/admin');
            }
        }


        if ($user->roles) {
            if ($user->hasRole('Member')) {

                if ($user->user_member) {
                    if ($user->user_member->count() > 0) {
                        return redirect('/members/' . $user->user_member->member->id);
                    } else {
                        return redirect('/members/create');
                    }
                } else {
                    return redirect('/members/create');
                }

            }
        }


    }

}
