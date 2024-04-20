<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{

    public function index()
    {

        $movies = Movie::all();
        // dd($movies);

        return view('welcome', compact('movies'));
    }

    public function about()
    {

        return view('about');
    }

    public function contacts()
    {


        return view('contacts');
    }

    public function query1()
    {
        $bestMovies = Movie::where('vote', '>', 8.8)->orderBy('vote', 'desc')->get();

        return view('query1', compact('bestMovies'));
    }

    public function query2()
    {
        $americanMovies = Movie::where('nationality', 'american')->get();

        return view('query2', compact('americanMovies'));
    }

    public function query3()
    {
        $britishMovies = Movie::where('nationality', 'REGEXP', 'british')->get();

        return view('query3', compact('britishMovies'));
    }
}
