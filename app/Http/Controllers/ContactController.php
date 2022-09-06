<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Contact;
use App\Models\Province;
use App\Models\User;
use App\Models\UserCategory;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contact = Contact::all();
        return view('admin.contact.index', compact('contact', ''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        //
        $provinces = Province::all();
        $cities = City::all();
        return view('admin.contact.create', compact('provinces', 'cities', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user)
    {
        //
        $contact = request()->validate([
            'province_id' => ['required'],
            'city_id' => ['required'],
            'physical_address' => ['required'],
            'mobile_number' => ['required'],
        ]);

        if ($user->user_category->name != 'individual') {
            $contact = request()->validate([
                'email' => 'required',
                'landline_number' => 'required',
                'contact_person' => 'required',
            ]);
        }
        $user->add_user_contact($contact);


        return back()->with('message', $contact->user_category->name . 'fee has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
        return view('admin.contact.show', compact('contact'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
        $provinces = Province::all();
        $cities = City::all();
        return view('admin.contact.edit', compact('contact', 'provinces', 'cities'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Contact $contact)
    {
        //
        //
        $user = $contact->user;

        $contact = request()->validate([
            'province_id' => ['required'],
            'city_id' => ['required'],
            'physical_address' => ['required'],
            'mobile_number' => ['required'],
        ]);

        if ($user->user_category->name != 'individual') {
            $contact = request()->validate([
                'email' => 'required',
                'landline_number' => 'required',
                'contact_person' => 'required',
            ]);
        }
        $user->update_user_contact($contact);

        return redirect('/admin/users/' . $user->id)->with('message', 'contact has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
        $user = $contact->user;
        $contact->delete();
        return redirect('/admin/users/' . $user->id)->with('message', 'contact has been deleted successfully.');

    }
}
