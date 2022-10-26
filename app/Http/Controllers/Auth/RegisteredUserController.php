<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\MemberCategory;
use App\Models\Subscriber;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $member_categories = MemberCategory::all();
        return view('auth.register', compact('member_categories'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'member_category_id' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'member_category_id' => $request->member_category_id,
            'password' => Hash::make($request->password),
        ]);

        $check_existence = Subscriber::where('email', $request->email)->first();
        if ($check_existence == null) {
            Subscriber::create([
                'email' => $request->email
            ]);
        }

        event(new Registered($user));

        Auth::login($user);

        $user->syncRoles('Member');

        return redirect('/check_user');
        //return redirect(RouteServiceProvider::HOME);
    }
}
