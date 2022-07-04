@extends('layout.main')

@section('content')

    <div class="container">
        <h2>Modifica di :{{ $comic->title }}</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="w-50" action="{{ route('comics.update', $comic) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input value="{{old('title'), $comic->title}}" type="text" class="form-control @error('title') is-invalid @enderror" name='title' id="title" placeholder="Comic Title">
                @error('title')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipolgia</label>
                <input value="{{old('type'), $comic->type}}" type="text"  class="form-control @error('type') is-invalid @enderror"name='type' id="type" placeholder="Comic Type">
                @error('type')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <img class="w-25" src="{{$comic->image}}" alt="{{$comic->title}}">
                <label for="image" class="form-control @error('image') is-invalid @enderror">Url</label>
                <input value="{{old('image')$comic->image}}" type="text" class="form-control" name='image' id="image" placeholder= "Comic Image Url">
                @error('image')
                    <p>{{$message}}</p>
                @enderror

            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>

@endsection
