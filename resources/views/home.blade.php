@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <div class="container">
        @foreach ($movies as $movie)
            <div class="card">
                <p class="title">Titolo:</p>
                <p class="information">{{ $movie['title'] }}</p>
                <p class="title">Titolo originale:</p> 
                <p class="information">{{ $movie['original_title'] }}</p>
                <p class="title">Nazionalità:</p>
                <p class="information">{{ $movie['nationality'] }}</p>
                <p class="title">Data:</p>
                <p class="information">{{ $movie['date'] }}</p>
                <p class="title">Valutazione:</p>
                <p class="information">{{ $movie['vote'] }}</p>
            </div>
        @endforeach
    </div>
@endsection