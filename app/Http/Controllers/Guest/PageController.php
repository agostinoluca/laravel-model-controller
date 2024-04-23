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

    public function bestmovies()
    {
        $bestMovies = Movie::where('vote', '>', 8.8)->orderBy('vote', 'desc')->get();

        return view('bestmovies', compact('bestMovies'));
    }

    public function americanmovies()
    {
        $americanMovies = Movie::where('nationality', 'american')->get();

        return view('americanmovies', compact('americanMovies'));
    }

    public function britishmovies()
    {
        $britishMovies = Movie::where('nationality', 'REGEXP', 'british')->get();

        return view('britishmovies', compact('britishMovies'));
    }
}
