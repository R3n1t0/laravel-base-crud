@extends('layout.main')

@section('content')

    <div class="container">
        <h3>{{$comic->title}}</h3>
        <p>{{$comic->type}}</p>
        <div class="row">
            <div class="col">
                <img src="{{$comic->image}}" alt="{{$comic->title}}">
                <a class="btn btn-success" href="{{route('comics.edit', $comic)}}">MODIFICA</a>
            </div>
        </div>
        <a class="btn" href="{{route("comics.index")}}"><< Torna</a>
    </div>
@endsection
