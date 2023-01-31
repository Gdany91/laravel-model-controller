@extends('layouts.main_layout')

@section('content')
    <h1>MOVIES</h1>
    <div id="test">
        <ul>
            @foreach ($movies as $movie)
                <li>
                    Titolo {{ $movie -> title }} - Titolo originale {{ $movie -> original_title }} Voto {{ $movie -> vote }} </li>
            @endforeach
        </ul>
    </div>
@endsection
