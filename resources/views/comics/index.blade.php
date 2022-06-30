@extends('layout.main')

@section('content')
    <div class="container">
        <h1>Le Comics</h1>

        <div class="row">
            @foreach ($comics as $comic)

                <div class="col-3 py-2">
                    <img src="{{ $comic->image}}" alt="{{ $comic->title}}">
                    <h5>{{ $comic->title}}</h5>
                    <p>{{ $comic->type}}</p>
                    <div class="buttons d-flex">
                        <a class="btn btn-primary" href="{{route('comics.show', $comic)}}">MOSTRA</a>
                        <a class="btn btn-success" href="{{route('comics.edit', $comic)}}">MODIFICA</a>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endsection
