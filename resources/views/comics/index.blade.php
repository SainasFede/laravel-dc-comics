@extends('layouts.main')

@section('content')
    <div class="container">
     <div class="d-flex justify-content-between">
        <h1 class="d-inline">Comics-DC</h1>
        <div>
            <a class="btn btn-warning" href="{{route('comics.create')}}">Immetti un Comic</a>
        </div>
    </div>
     @if (session('deleted'))
     <div class="alert alert-success" role="alert">
         {!!session('deleted')!!}
    </div>
    @endif
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
                                <a class="btn btn-primary"
                                href="{{route('comics.show', $comic)}}" title="show"><i class="fa-regular fa-eye"></i></a>

                                <a class="btn btn-success "
                                href="{{route('comics.edit', $comic)}}" title="edit"><i class="fa-solid fa-pencil"></i></a>

                                <form onsubmit="return confirm('Vuoi eliminare : {{$comic->title}}')"
                                    class="d-inline"
                                    action="{{route('comics.destroy', $comic)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                    title="delete"><i class="fa-solid fa-trash"></i></button>
                                </form>
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
