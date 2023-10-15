<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class PageController extends Controller
{
    function index() 
    {
        $movies = Movie::all();
        // dd($movies);
        return view('welcome', compact('movies'));
    }
}
