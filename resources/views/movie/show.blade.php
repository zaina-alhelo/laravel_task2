@extends('layout.app')
@section('title', 'show')

@section('container')





<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">{{$movie->movie_name}}</h5>
        <p class="card-text">{{$movie->movie_description}}</p>
 
    </div>
    <img src="https://www.wkbn.com/wp-content/uploads/sites/48/2022/05/Summer-Movie-Comeback.jpg?w=1280" class="card-img-top "style="height:500px" alt="">
</div>
@endsection 