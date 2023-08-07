<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use App\Http\Requests\StoreBloodRequest;
use App\Http\Requests\UpdateBloodRequest;


class BloodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blood.index',[
            'blood' => Blood::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blood.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBloodRequest $request)
    {
    
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name'=>['required', 'string', 'max:255'],
            'phone_number'=> ['required', 'integer', 'max:10'],
            'email' => ['required', 'string', 'email'],
          
        ]);

        $blood = new Blood();
        $blood->first_name = strip_tags($request->input('first_name'));
        $blood->last_name = strip_tags($request->input('last_name'));
        $blood->blood_type = strip_tags($request->input('blood_type'));
        $blood->location = strip_tags($request->input('location'));
        $blood->phone_number = strip_tags($request->input('phone_number'));
        $blood->email = strip_tags($request->input('email'));

        $blood->save();
        return redirect()->route('blood.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blood $blood)
    {
        return view('blood.show',[
            'blood' => Blood::findOrFail($blood)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blood $blood)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBloodRequest $request, Blood $blood)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blood $blood)
    {
        //
    }
}
