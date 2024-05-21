@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="container">
    <h2 class="py-2">Movies</h2>       
    <div class="row row-cols-1 row-cols-lg-4 g-4 py-4">
    @foreach ($movies as $movie)
        <div class="col">             
            <div class="card h-100">
                <img src="{{$movie->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <p class="card-text">Vote: {{$movie->vote}}</p>
                </div>
            </div>
            
        </div>
        @endforeach
    </div>

    
    
    

    
</section>

@endsection
