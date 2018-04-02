@extends('layouts.app') 
@section('content')


<div class="container">
        <div class="card">
    @foreach ($movies as $movie)
        <div class="row">
            <div class="col-md-7">
                    <img class="img-fluid rounded mb-3 mb-md-0" width="200px" src="{{ $movie->Picture }}"> 
            </div>
            <div class="col-md-5 movie-dc">
                <h1>{{ $movie->Title }}</h1>
                <p>
                    <b>Director: </b>{{ $movie->director->name }}</p>
                <p>

                <p>{{ $movie->Description }}</p>
                <a href="{{ route('movies.show', ['id' => $movie->id]) }}">Read more</a>
             
            </div>
         {{--  A line that will separate every movie  --}}
            <hr width="75%">

            @endforeach
        </div>
    </div>
</div>
@endsection