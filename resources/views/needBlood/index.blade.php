@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center">
        <h1>Needy list</h1>
    </div>
    <div>
        <ul>
            @foreach (needBlood as $needBloods)
            
                <li>
                    <p>{{$needBloods['first_name']}} {{$needBloods['last_name']}} blood type {{$needBloods['blood_type']}} location {{$needBloods['loation']}} : <strong>متلقي</strong></p>
                </li>
            
            @endforeach

            
        </ul>
        
    </div>
</div>

@endsection
