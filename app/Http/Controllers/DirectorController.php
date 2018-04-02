<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('director.index', ['director' =>Director::orderBy('name')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('director.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $directors = new Director;
        $directors->name = $request->input('name');
        $directors->biography = $request->input('biography');
        $directors->save();

        return redirect()->route('director.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Director $directors)
    {
        $directors->load('director');

        return view('director.show', ['director' => $directors]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Director $directors)
    {
        return view('director.edit', [
            'director' => $directors,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Director $directors)
    {
        $directors = new Director;
        $directors->name = $request->input('name');
        $directors->biography = $request->input('biography');
        $directors->save();

        return redirect()->route('director.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Director $directors)
    {
        //
    }
}
