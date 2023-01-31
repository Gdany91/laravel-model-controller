@extends('layouts.main_layout')

@section('content')
    <h1>MOVIES</h1>
    <div >
        <ul >
            @foreach ($movies as $movie)
                <li >
                    Titolo: {{ $movie -> title }}   -
                    Titolo originale: {{ $movie -> original_title }} - 
                    Nationality: {{ $movie -> nationality }} - 
                    Date: {{ $movie -> date }} -  
                    Voto: {{ $movie -> vote }} 
                </li>
            @endforeach
        </ul>
    </div>
@endsection
