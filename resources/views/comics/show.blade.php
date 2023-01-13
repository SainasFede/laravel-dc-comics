@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="text-center">Dettaglio Comic</h1>
    <div class="card mb-4" style="width: 18rem;">
        <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{$comic['title']}}">
        <div class="card-body">
          <h5 class="card-title">{{$comic['title']}}</h5>
          <h6>{{$comic['sale_date']}}</h6>
          <p>{{$comic['price']}}</p>
          <p class="card-text">{{$comic['description']}}</p>
        </div>
        <form onsubmit="return confirm('Vuoi eliminare : {{$comic->title}}')"
            class="d-inline d-flex justify-content-end p-3"
            action="{{route('comics.destroy', $comic)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"
            title="delete"><i class="fa-solid fa-trash"></i></button>
        </form>
      </div>
    <a class="btn btn-primary" href="{{route('comics.index')}}">Torna all'elenco Comics</a>
</div>
@endsection
