@extends('layouts.app')

<title>@yield('pagetitle', 'Contacts')</title>

@section('content')
    <div class="container">

        <form action="" method="get">

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                    placeholder="example: Mario Rossi" />
                {{-- <small id="helpId" class="form-text text-muted"></small> --}}
            </div>


            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId"
                    placeholder="example: abc@mail.com" />
                {{-- <small id="emailHelpId" class="form-text text-muted"></small> --}}
            </div>

            <div class="mb-3">
                <label for="message" class="form-label"></label>
                <textarea placeholder="...write here your question..." class="form-control" name="message" id="message"
                    rows="3"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>

        </form>






    </div>
@endsection
