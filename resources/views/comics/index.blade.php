@extends('layouts.main')

@section('content')
    <div class="container text-center py-5 text-light">
        <h1>Comics Dashboard</h1>
        <div class="table table-hover pt-5">
            <table class="table table-hover text-light">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Series</th>
                    <th scope="col">Type</th>
                    <th scope="col">Price</th>
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
                            <a href="{{route('comics.show', $comic)}}" title="show" class="btn btn-outline-success"><i class="fa-solid fa-mask text-light"></i></a>
                            <a href="{{route('comics.edit', $comic)}}" title="edit" class="btn btn-outline-warning"><i class="fa-solid fa-mask text-light"></i></a>
                            {{-- <a href="{{route('comics.show', $comic)}}" title="show" class="btn btn-outline-danger"><i class="fa-solid fa-mask text-light"></i></a> --}}
                            @include('partials.form-delete',['title'=>$comic->title, 'id'=>$comic->id])
                        </td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <div class="d-flex justify-content-center p-2">
                {{$comics->links()}}
            </div>
            <div>
                <a href="{{route('comics.create')}}" class="btn btn-outline-light">Nuovo Comic</a>
            </div>
    </div>
@endsection
