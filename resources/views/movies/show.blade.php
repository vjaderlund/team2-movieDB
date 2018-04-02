@extends('layouts.app') 
@section('content')

<div class="container">
<div class="card">
    <div class="row">
        <div class="col-md-7">
            <h1>{{ $movie->Title }}</h1>
            <img class="img-fluid rounded mb-3 mb-md-0" width="200px" src="{{ $movie->Picture }}">
        
         
                <p><b>Director: </b>{{ $movie->director->name }}</p>
                <p><b>Actors: </b> {{ $movie->actor_id}}</p>
                <p><b>Description: </b>{{ $movie->Description }}</p>
                <p><b>Release year: </b>{{ $movie->ReleaseDate }}</p>
                <p><b>Runtime: </b> {{ $movie->Runtime }}</p>
                    
                        <a class="btn btn-sm btn-primary" href="{{ route('movies.edit', ['movie' => $movie->id]) }}">Edit movie</a>
                </div>
            </div>
    </div>
</div> 
@endsection
