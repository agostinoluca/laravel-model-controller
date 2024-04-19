@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-2 row-cols-3 row-cols-4">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        {{ $movie->title }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
