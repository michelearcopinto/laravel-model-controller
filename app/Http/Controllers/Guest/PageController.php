<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $greeting = 'Lista film';

        $data = [
            [
                'name' => 'Fabio'
            ],
            [
                'name' => 'Mario'
            ],
            [
                'name' => 'Sara'
            ],
            [
                'name' => 'Alex'
            ],
        ];

        $movies = Movie::All();

        return view('welcome', compact('data', 'greeting', 'movies'));
    }
}
