@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Importa un Comic</h1>
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Email address</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Scrivi il titolo">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Inserisci percorso">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Costo</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Quanto costa">
          </div>

          <div class="mb-3">
            <label for="series" class="form-label">Serie Comic</label>
            <input type="text" name="series" class="form-control" id="series" placeholder="Inserisci Serie">
          </div>

          <div class="mb-3">
            <label for="date" class="form-label">Data di pubblicazione</label>
            <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Data di pubblicazione">
          </div>

          <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" name="type" class="form-control" id="type" placeholder="Inserisci la tipologia">
          </div>
          <button type="submit" class="btn btn-primary mb-5">Invia</button>
      </form>
</div>
@endsection
