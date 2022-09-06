<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use App\Models\UserCategory;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fees = Fee::all();
        return view('admin.fees.index', compact('fees', ''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user_categories = UserCategory::all();
        return view('admin.fees.create', compact('user_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $fee = Fee::create(request()->validate([
            'user_category_id' => ['required', 'unique:fees'],
            'amount' => 'required',
        ]));

        return back()->with('message', $fee->user_category->name . 'fee has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fee $fee)
    {
        //
        return view('admin.fees.show', compact('fee'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Fee $fee)
    {
        //
        $user_categories = UserCategory::all();
        return view('admin.fees.edit', compact('fee', 'user_categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Fee $fee)
    {
        //
        $fee->update(request()->validate([
            'user_category_id' => ['required', 'unique:fees'],
            'amount' => 'required',
        ]));

        return redirect('/admin/fees')->with('message', $fee->user_category->name . 'fee has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fee $fee)
    {
        //
        $fee->delete();
        return redirect('/admin/fees')->with('message', $fee->user_category->name . 'fee has been deleted successfully.');

    }
}
