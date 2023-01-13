@extends('layouts.main')

@section('content')
    <div class="container text-center p-5 text-light">
        <h1>Aggiungi Comic</h1>
        <form class="py-5" method="POST" action="{{route('comics.update',$comic)}}">
            @csrf
            @method('PUT')
              <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Inserire titolo..">
              </div>

              <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Inserire descrizione..">
              </div>

              <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Inserire URL immagine..">
              </div>

              <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="Inserire prezzo..">
              </div>

              <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="Inserire serie..">
              </div>

              <div class="mb-3">
                <label for="sale_date" class="form-label">Data Uscita</label>
                <input type="date" name="sale_date" id="sale_date" class="form-control" placeholder="Inserire data..">
              </div>

              <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <select id="type" name="type" class="form-select">
                  <option selected>Seleziona tipo..</option>
                  <option>Comic Book</option>
                  <option>Graphic Novel</option>
                </select>
              </div>

              <button type="submit" class="btn btn-outline-light">Aggiorna</button>
          </form>
    </div>
@endsection
