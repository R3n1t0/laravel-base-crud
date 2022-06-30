@extends('layout.main')

@section('content')
    <div class="container">
        <h1>Le Comics</h1>

        <div class="row">
            @foreach ($comics as $comic)

                <div class="col-3">
                    <img src="{{ $comic->image}}" alt="{{ $comic->title}}">
                    <h5>{{ $comic->title}}</h5>
                    <p>{{ $comic->type}}</p>
                </div>

            @endforeach
        </div>
    </div>
@endsection
