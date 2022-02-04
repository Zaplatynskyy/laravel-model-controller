<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Composer;

class MovieController extends Controller
{
    public function index() 
    {
        $movies = Movie::all();        
        return view("home", ['movies' => $movies]);
    }
}
