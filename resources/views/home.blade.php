@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="container">
    <h1>Movies</h1>
       
    <div class="row row-cols-1 row-cols-lg-4 g-4">
    @foreach ($movies as $movie)
        <div class="col">             
            <div class="card">
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
