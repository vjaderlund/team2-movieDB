<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('movies.index', ['movies' =>Movie::orderBy('Title')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movies = new Movie;
        $movies->Title = $request->input('title');
        $movies->Picture =$request->input('picture');
        $movies->ReleaseDate = $request->input('releasedate');
        $movies->Runtime = $request->input('runtime');
        $movies->director_id = $request->input('director');
        $movies->actor_id = $request->input('actor');
        $movies->Description = $request->input('description');
        $movies->save();

        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movies)
    {
        $movies->load('director');

        return view('movies.show', ['movie' => $movies]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movies)
    {
        return view('movies.edit', [
            'movie' => $movies,
            'directors' => Director::orderBy('name')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movies)
    {
        $movies->Title = $request->input('title');
        $movies->Picture =$request->input('picture');
        $movies->ReleaseDate = $request->input('releasedate');
        $movies->Runtime = $request->input('runtime');
        $movies->director_id = $request->input('director');
        $movies->actor_id = $request->input('actor');
        $movies->Description = $request->input('description');
        $movies->save();

        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movies)
    {
        //
    }
}
