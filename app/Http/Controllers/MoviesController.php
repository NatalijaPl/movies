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

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate(
            request(),
            [
                'title' => 'required',
                'genre' => 'required',
                'director' => 'required',
                'release_date' => 'nullable|integer|min:1900|max:' . date('Y'),
                'storyline' => 'max:1000'
            ]
        );
        Movie::create(
            [
                'title' => request('title'),
                'genre' => request('genre'),
                'director' => request('director'),
                'year' => request('year'),
                'storyline' => request('storyline')
            ]
        );
        return redirect('/movies');
    }
}
