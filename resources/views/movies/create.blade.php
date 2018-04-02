@extends('layouts.app') @section('content')

<div class="container">
    <form method="post" action="{{ route('movies.store') }}" enctype="multipart/form-data">
        @csrf
        <h5 class="card-title"> Create a new Movie</h5>
</div>
<div class="card-body">
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Add title">
    </div>

    <div class="form-group">
        <label>Genre</label>
        <input type="text" name="genre" id="genre" class="form-control">
    </div>

    <div class="form-group">
        <label>Runtime</label>
        <input type="number" min="0" name="runtime" class="form-control">
    </div>

    <div class="form-group">
        <label>Releasedate</label>
        <input type="date" name="releasedate" class="form-control" value="">
    </div>

    <div class="form-group">
        <label>Director</label>
        <input type="text" name="director" id="director" class="form-control" value="">
    </div>


        <div class="form-group">
            <label>Actors (separate with comma)</label>
            <input type="text" name="actors" class="form-control" value="">
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" class="form-control" value="">
        </div>

        <div class="form-group">
            <label>Poster (in http format. Ending with image file type)</label>
            <input type="text" name="picture" class="form-control" value="">
        </div>




    <button type="submit" class="btn btn-primary">Create</button>


    </form>

   

</div>
@endsection