@extends('layout.main')

@section('content')

    <div class="container">
        <h2>Modifica di :{{ $comic->title }}</h2>

        <form class="w-50" action="{{ route('comics.update', $comic) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input value="{{$comic->title}}" type="text" class="form-control" name='title' id="title" placeholder="Comic Title">
            </div>

            <div class="mb-3">
                <label value="{{$comic->type}}" for="type" class="form-label">Tipolgia</label>
                <input type="text" class="form-control" name='type' id="type" placeholder="Comic Type">
            </div>

            <div class="mb-3">
                <img class="w-25" src="{{$comic->image}}" alt="{{$comic->title}}">
                <label for="image" class="form-label">Url</label>
                <input value="{{$comic->image}}" type="text" class="form-control" name='image' id="image" placeholder= "Comic Image Url">
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>

@endsection
