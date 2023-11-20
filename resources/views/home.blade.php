@extends('layouts.main')

@section('content')
    <div class="container d-flex flex-wrap">

        @foreach ($movies as $movie)
            <div class="card m-2" style="width: 18rem;">
                <img src="" class="card-img-top" alt="">
                <div cLass="card-body d-flex flex-column justify-content-between">
                    <h4 class="card-title">{{ $movie->title }}</h4>
                    <span>Titolo originale: {{ $movie->original_title }}</span>
                    <span>Nazionalità: {{ $movie->nationality }}</span>
                    <span>Uscita: {{ $movie->date }}</span>
                    <span>Voto: {{ $movie->vote }}</span>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
