@extends('layout.app')
@section('title', 'index')


@section('container')
<div class="text-center">

    <a href="{{route('movies.create')}}" class="btn btn-success">Add Movie</a>
</div>
<table class="table mt-4">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Movie Name</th>

            <th scope="col">Movie Genre</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)

            <tr>
                <th scope="row">{{$movie['id']}}</th>
                <td>{{$movie->movie_name}}</td>
  
                <td>{{$movie->movie_gener}}</td>


                <td><a href="{{route('movies.show', $movie['id'])}}" class="btn btn-info">view</a>
                    <a href="{{route('movies.edit', $movie['id'])}}" class="btn btn-primary">Edit</a>
                    <form style="display:inline;" method='POST' action={{route('movies.destroy', $movie->id)}} onsubmit="return deleteconform()" >
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>
                </td>
            </tr>
        @endforeach


    </tbody>
</table>
<script>
    function deleteconform() {
        return confirm("are you sure to delete ?");
    }
</script>
@endsection

