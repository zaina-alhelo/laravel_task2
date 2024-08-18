<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moviefromDB=movie::all();
    return view("movie.index",['movies'=> $moviefromDB] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $moviefromDB = movie::all();

        return view('movie.create', ['movies' => $moviefromDB]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        movie::create([
            'movie_name'=>$request->name,
            'movie_description'=>$request->description,
            'movie_gener'=>$request->genre
        ]);
return to_route('movies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(movie $movie)
    {
        
      return view('movie.show', ['movie'=> $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(movie $movie)
    {
        return view('movie.edit', ['movie'=> $movie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, movie $movie)
    {
        $movie->update([
            'movie_name'=> $request->name,
            'movie_description'=> $request->description,
            'movie_gener'=> $request->genre,
        ]);
        return to_route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(movie $movie)
    {
        $movie->delete();
        return to_route('movies.index');

    }
}
