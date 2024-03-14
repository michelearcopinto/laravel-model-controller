@extends('layouts.basic')

@section('title', 'Benvenuto | Home')

@section('style')
    <style>
        main {
            padding-inline: 50px;

            h1 {
                color: blue;
            }
        }
    </style>
@endsection

@section('content')
    <h1>{{ $greeting }}</h1>

    <div class="grid">
        @foreach ($movies as $movie)
            <div class="card">
                <ul>
                    <li>
                        Titolo: <strong>{{ $movie['title'] }}</strong>
                    </li>
                    <li>
                        Nazionalità: <strong>{{ $movie['nationality'] }}</strong>
                    </li>
                    <li>
                        Data: <strong>{{ $movie['date'] }}</strong>
                    </li>
                    <li>
                        Voto: <strong>{{ $movie['vote'] }}</strong>
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
