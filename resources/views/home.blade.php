@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="container">
    <h1>Movies</h1>
    @foreach ($movies as $movie)
    <ul>
    <li>{{$movie->title}}</li>
    </ul>
    
    
    @endforeach
</section>

@endsection
