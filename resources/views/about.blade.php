@extends('layouts.app')

<title>@yield('pagetitle', 'About Us')</title>

@section('content')
    <div class="container d-flex flex-column align-items-center">
        <h1>About Us</h1>
        <div style="width: 20rem" class="p-3">
            <img class="card-img-top rounded-circle" src="https://picsum.photos/600/600" alt="random image by Lorem Picsum">
        </div>
        <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos aliquam quae incidunt, aut
            asperiores?
            Molestias ipsam ipsum provident praesentium voluptatum quae cupiditate! Dolorum soluta distinctio tempore velit
            facere repellat.</p>
    </div>
@endsection
