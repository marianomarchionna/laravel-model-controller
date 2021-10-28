@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    
    @foreach ($movies as $movie)
        <p>{{ $movie }}</p>
    @endforeach
@endsection