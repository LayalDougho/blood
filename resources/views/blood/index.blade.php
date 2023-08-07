@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center">
        <h1>Donation list</h1>
    </div>
    <div>
        <ul>
            @foreach ($blood as $bloods)
            
                <li>
                    <p>{{$bloods['first_name']}} {{$bloods['last_name']}} blood type {{$bloods['blood_type']}} location {{$bloods['loation']}} : <strong>متبرع</strong></p>
                </li>
            
            @endforeach

            
        </ul>
        
    </div>
</div>

@endsection
