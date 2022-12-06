<?php

namespace App\Http\Controllers;

use App\Model\Movies;
use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('index', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::find($id);
        return view('show', compact('movie'));
    }
}
