@extends('layout.app')
@section('title', 'show')

@section('container')
<form action="{{route('movies.update', $movie->id)}}" method="POST">

    @csrf
@method('PUT')  
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Movie Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$movie->movie_name}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Movie Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$movie->movie_description}}</textarea>
    </div>
    <div class="mb-3 mt-3">
        <label for="exampleFormControlInput1" class="form-label">Add Movie Genre</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="genre" value="{{$movie->movie_gener}}">
    </div>
<button type="submit" class="btn btn-success mt-3">Update</button>

</form>

@stop


