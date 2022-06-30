@extends('layout.main')

@section('content')

    <div class="container">
        <form class="w-50" action="{{route('comics.store')}}" method="POST">

            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" class="form-control" name='title' id="title" placeholder="Comic Title">
            </div>

            <div class="mb-3">
              <label for="type" class="form-label">Tipolgia</label>
              <input type="text" class="form-control" name='type' id="type" placeholder="Comic Type">
            </div>

            <div class="mb-3">
              <label for="image" class="form-label">Url</label>
              <input type="text" class="form-control" name='image' id="image" placeholder= "Comic Image Url">
            </div>

            <button type="submit" class="btn btn-primary">Crea</button>
          </form>
    </div>

@endsection
