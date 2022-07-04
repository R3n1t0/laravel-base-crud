@extends('layout.main')

@section('content')

    <div class="container">
        <h1>Crea un nuovo Comics</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <form class="w-50" action="{{route('comics.store')}}"method="POST">

            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" name='title' id="title" placeholder="Comic Title">
              @error('title')
                <p>{{$message}}</p>
              @enderror
            </div>

            <div class="mb-3">
              <label for="type" class="form-label">Tipolgia</label>
              <input type="text"
                class="form-control @error('type') is-invalid @enderror"
                name='type' id="type"
                placeholder="Comic Type">
              @error('type')
                <p>{{$message}}</p>
              @enderror
            </div>

            <div class="mb-3">
              <label for="image" class="form-label">Url</label>
              <input type="text" class="form-control @error('image') is-invalid @enderror" name='image' id="image" placeholder= "Comic Image Url">
              @error('image')
                <p>{{$message}}</p>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>

@endsection
