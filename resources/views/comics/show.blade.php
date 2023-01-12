@extends('layouts.main')

@section('content')
    <div class="container d-flex justify-content-center p-5 text-light">
        <div class="card bg-transparent text-center">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title">{{$comic->title}}</h3>
              <p class="card-text text-secondary">{{$comic->description}}</p>
              <a href="{{route('comics.index')}}" class="btn btn-outline-light">Indietro</a>
            </div>
          </div>
    </div>
@endsection

<style>
    .card{
        width: 300px;
    }
</style>
