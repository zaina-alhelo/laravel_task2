@extends('layout.app')
@section('title', 'create')
@section('container')


<form action="{{route('movies.store')}}" method="POST">

@csrf

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Movie Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Movie Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
</div>
<div class="mb-3 mt-3">
    <label for="exampleFormControlInput1" class="form-label">Add Movie Genre</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="genre">
</div>
<div>
    
    <label for="exampleFormControlTextarea1" class="form-label">Movie Genre</label>
    <select class="form-select" aria-label="Default select example" name="genre">
            <option value="" disabled selected>Select a movie genre</option>

        @foreach ($movies as $movie)

            <option value="{{$movie->movie_gener}}">{{$movie->movie_gener}}</option>
        @endforeach
        
    </select>
</div>
<button type="submit" class="btn btn-success mt-3">submit</button>

</form>
@stop