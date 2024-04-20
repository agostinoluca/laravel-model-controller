@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 row-cols-xxl-6 g-4 ">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="https://picsum.photos/600/600" alt="random image by Lorem Picsum">
                        {{ $movie->title }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
