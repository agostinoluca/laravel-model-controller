@extends('layouts.app')

<title>@yield('pagetitle', '1')</title>

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 g-4">
            @foreach ($bestMovies as $movie)
                <div class="col">
                    <div class="card text-center">
                        <img class="card-img-top" src="https://picsum.photos/600/600" alt="random image by Lorem Picsum">
                        <div class="card-title p-3">
                            <strong>{{ $movie->title }}</strong>
                        </div>
                        <div class="card-footer">
                            <div>Vote: {{ $movie->vote }}</div>
                            <div>Date: {{ $movie->date }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
