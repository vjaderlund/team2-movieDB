@extends('layouts.app')
@section('content')

<div class="container">

    <form method="post" action="{{ route('movies.update', ['movie' => $movie->id]) }}" enctype="multipart/form-data">
        @csrf
        <h5 class="card-title"> Edit the Movie</h5>
</div>
<div class="card-body">
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Edit title">
    </div>

    <div class="form-group">
        <label>Genre</label>
        <input type="text" name="genre" id="genre" class="form-control" placeholder="Edit genre">
    </div>

    <div class="form-group">
        <label>Runtime</label>
        <input type="number" min="0" name="runtime" class="form-control" placeholder="Edit runtime">
    </div>

    <div class="form-group">
        <label>Releasedate</label>
        <input type="date" name="releasedate" class="form-control" value="" placeholder="Edit release date">
    </div>

    <div class="form-group">
        <label>Director</label>
        <input type="text" name="director" id="director" class="form-control" value="" placeholder="Edit director">
    </div>


        <div class="form-group">
            <label>Actors (separate with comma)</label>
            <input type="text" name="actors" class="form-control" value="" placeholder="Edit actors">
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" class="form-control" value="" placeholder="Edit description">
        </div>

        <div class="form-group">
            <label>Poster (in http format. Ending with image file type)</label>
            <input type="text" name="picture" class="form-control" value="" placeholder="Edit poster">
        </div>




    <button type="submit" class="btn btn-primary">Edit movie</button>


    </form>
@endsection