<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
class MovieController extends Controller
{
    public function home(){
        $movies = Movie::all();
        // dd($movies);
        return view('home', compact('movies'));
    }
}
