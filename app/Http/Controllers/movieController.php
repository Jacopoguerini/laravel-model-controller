<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class movieController extends Controller
{
    public function index() {
        $title = "Lista Film";

        $movies = Movie::all();

        return view('home', compact('title', 'movies'));
    }
}
