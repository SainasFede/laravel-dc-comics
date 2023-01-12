@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Comics-DC</h1>
        <div class="row mt-4">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Type</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic )
                        <tr>
                            <td>{{$comic->id}}</td>
                            <td>{{$comic->title}}</td>
                            <td>{{$comic->type}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('comics.show', $comic)}}" title="show"><i class="fa-regular fa-eye"></i></a>
                                <a class="btn btn-success " href="#" title="edit"><i class="fa-solid fa-pencil"></i></a>
                                <a class="btn btn-danger " href="#" title="delete"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @empty
                        <h1>Nessun prodotto trovato</h1>
                    @endforelse

                </tbody>
              </table>

              {{$comics->links()}}
        </div>
    </div>
@endsection
