<?php

namespace App\Http\Controllers;

use App\Models\NeedBlood;
use App\Http\Requests\StoreNeedBloodRequest;
use App\Http\Requests\UpdateNeedBloodRequest;

class NeedBloodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blood.index',[
            'blood' => NeedBlood::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('needBlood.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNeedBloodRequest $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name'=>['required', 'string', 'max:255'],
            'phone_number'=> ['required', 'integer', 'max:10'],
            'email' => ['required', 'string', 'email']
        ]);
        $needBlood = new NeedBlood();
        $needBlood->first_name = strip_tags($request->input('first_name'));
        $needBlood->last_name = strip_tags($request->input('last_name'));
        $needBlood->blood_type = strip_tags($request->input('blood_type'));
        $needBlood->required_quantity = strip_tags($request->input('required_quantity'));
        $needBlood->location = strip_tags($request->input('location'));
        $needBlood->phone_number = strip_tags($request->input('phone_number'));
        $needBlood->email = strip_tags($request->input('email'));

        $needBlood->save();
        return redirect()->route('needBlood.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(NeedBlood $needBlood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NeedBlood $needBlood)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNeedBloodRequest $request, NeedBlood $needBlood)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NeedBlood $needBlood)
    {
        //
    }
}
