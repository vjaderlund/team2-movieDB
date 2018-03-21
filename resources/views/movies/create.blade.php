@extends('layouts.app') @section('content')
<div class="container">


    <div class="card">
        <div class="card-header">
            <h5 class="card-title"> Create a new Movie</h5>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('movies.store') }}">
                @csrf

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="" /> {{-- Can add {{ $movie->title }} in between "value" up there. --}}
                </div>
                <div class="form-group">
                    <label>Runtime</label>
                    <input type="number" name="runtime" class="form-control" />
                </div>

                <div class="form-group">
                    <label>Director</label>
                    <select name="director" class="form-control">
                        <option value="">-</option>

                        @foreach ($directors as $director)
                        <option value="{{ $director->id }}">
                            {{ $director->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>