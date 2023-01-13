@extends('layouts.main')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <h1 class="d-inline">Importa un Comic</h1>
        <div>
            <a class="btn btn-success" href="{{route('comics.index')}}">Torna all'elenco Comics</a>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <h6>Errore</h6>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title"class="form-label"><strong>Title</strong></label>
            <input type="text"
            name="title"
            value="{{old('title')}}"
            class="form-control @error('title') is-invalid @enderror"
            id="title"
            placeholder="Scrivi il titolo">
            @error('title')
            <div class="invalid-feedback">
              <h6>{{$message}}</h6>
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label"><strong>Descrizione</strong></label>
            <textarea class="form-control @error('description') is-invalid @enderror"
            name="description"
            id="description"
            rows="5">{{old('description')}}</textarea>
            @error('description')
            <div class="invalid-feedback">
              <h6>{{$message}}</h6>
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label"><strong>Immagine</strong></label>
            <input type="text"
            name="thumb"
            value="{{old('thumb')}}"
            class="form-control @error('thumb') is-invalid @enderror"
            id="thumb"
            placeholder="Inserisci percorso">
            @error('thumb')
            <div class="invalid-feedback">
              <h6>{{$message}}</h6>
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label"><strong>Costo</strong></label>
            <input type="text"
            name="price"
            value="{{old('price')}}"
            class="form-control @error('price') is-invalid @enderror"
            id="price"
            placeholder="Quanto costa">
            @error('price')
            <div class="invalid-feedback">
              <h6>{{$message}}</h6>
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label"><strong>Serie Comic</strong></label>
            <input type="text"
            name="series"
            value="{{old('series')}}"
            class="form-control @error('series') is-invalid @enderror"
            id="series"
            placeholder="Inserisci Serie">
            @error('series')
            <div class="invalid-feedback">
              <h6>{{$message}}</h6>
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="date" class="form-label"><strong>Data di pubblicazione</strong></label>
            <input type="text"
            name="sale_date"
            value="{{old('sale_date')}}"
            class="form-control @error('sale_date') is-invalid @enderror"
            id="sale_date"
            placeholder="Data di pubblicazione">
            @error('sale_date')
            <div class="invalid-feedback">
              <h6>{{$message}}</h6>
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label"><strong>Tipologia</strong></label>
            <input type="text"
            name="type"
            value="{{old('type')}}"
            class="form-control @error('type') is-invalid @enderror"
            id="type"
            placeholder="Inserisci la tipologia">
            @error('type')
            <div class="invalid-feedback">
              <h6>{{$message}}</h6>
            </div>
            @enderror
        </div>

          <button type="submit" class="btn btn-primary mb-5">Invia</button>
    </form>

</div>
@endsection
