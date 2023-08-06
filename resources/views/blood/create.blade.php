@extends('layouts.app')
@section('title','Donor')
@section('content')

<div class="flex justify-center">
    <form action="{{route('blood.store')}}" method="post" class="form bg-white p-6 border-1">
        @csrf
        <div>
            <label for="first_name"> First Name</label>
            <br>
            <input id="first_name" name="first_name" type="text">
            @error('first_name')
            {{$message}}
            @enderror 
        </div>

        <div>
            <label for="last_name">Last Name</label>
            <br>
            <input id="last_name" name="last_name" type="text">
            @error('last_name')
            {{$message}}
            @enderror
        </div>

        <div>
            <label for="blood_type">Blood Type:</label>
            <br>
            <select name="blood_type" id="blood_type">
                <option value="a+">A+</option>
                <option value="a-">A-</option>
                <option value="b+">B+</option>
                <option value="b-">B-</option>
                <option value="ab+">AB+</option>
                <option value="ab-">AB-</option>
                <option value="o+">O+</option>
                <option value="o-">O-</option>

            </select>
        </div>

        <div>
            <label for="location">Location</label>
            <br>
            <select name="location" id="location">
                <option value="latakia">Latakia</option>
                <option value="damascuse">Damascuse</option>
                <option value="aleppo">Aleppo</option>
                <option value="homs">Homs</option>
                <option value="hama">Hama</option>
                <option value="tartus">Tartus</option>
            </select>
        </div>

        <div>
            <label for="phone_number">Phone Number</label>
            <br>
            <input id="phone_number" name="phone_number" type="text">
            @error('phone_number')
            {{$message}}
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <br>
            <input id="email" name="email" type="email">
            @error('email')
            {{$message}}
            @enderror
        </div>


        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection
