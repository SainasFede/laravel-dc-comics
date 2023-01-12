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
      </div>
    <a class="btn btn-info" href="{{route('comics.index')}}">Torna all'elenco delle paste</a>
</div>
@endsection
