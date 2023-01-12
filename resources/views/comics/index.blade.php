@extends('layouts.main')

@section('content')
    <div class="container text-center py-5">
        <h1>Comics Dashboard</h1>
        <div class="table table-hover pt-5">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Series</th>
                    <th scope="col">Price</th>
                    <th scope="col">Type</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{$comic->id}}</td>
                        <th scope="row">{{$comic->title}}</th>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->type}}</td>
                        <td>{{$comic->price}}</td>
                        <td>
                            <a href="" class="btn btn-outline-dark"><i class="fa-solid fa-mask"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <div class="d-flex justify-content-center p-5">
                {{$comics->links()}}
            </div>
    </div>
@endsection


<style>
    a i{
        font-size: 1.2rem;
    }
</style>
