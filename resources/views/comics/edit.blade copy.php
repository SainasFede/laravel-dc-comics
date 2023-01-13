@extends('layouts.main')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <h1 class="d-inline">Modifica un Comic</h1>
        <div>
            <a class="btn btn-success" href="{{route('comics.index')}}">Torna all'elenco Comics</a>
        </div>
    </div>
    <form action="{{route('comics.update', $comic)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Email address</label>
            <input type="text"
             name="title"
             class="form-control"
             id="title"
             value="{{$comic->title}}"
             placeholder="Scrivi il titolo">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control"
             name="description"
             id="description"
             rows="3">{{$comic->description}}</textarea>
          </div>

          <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text"
            name="thumb"
            class="form-control"
            id="thumb"
            value="{{$comic->thumb}}"
            placeholder="Inserisci percorso">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Costo</label>
            <input type="text"
             name="price"
             class="form-control"
             id="price"
             value="{{$comic->price}}"
             placeholder="Quanto costa">
          </div>

          <div class="mb-3">
            <label for="series" class="form-label">Serie Comic</label>
            <input type="text"
            name="series"
            class="form-control"
            id="series"
            value="{{$comic->series}}"
            placeholder="Inserisci Serie">
          </div>

          <div class="mb-3">
            <label for="date" class="form-label">Data di pubblicazione</label>
            <input type="text"
            name="sale_date"
            class="form-control"
            id="sale_date"
            value="{{$comic->sale_date}}"
            placeholder="Data di pubblicazione">
          </div>

          <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text"
            name="type"
            class="form-control"
            id="type"
            value="{{$comic->type}}"
            placeholder="Inserisci la tipologia">
          </div>
          <button type="submit" class="btn btn-primary mb-5">Modifica</button>
      </form>
</div>
@endsection
