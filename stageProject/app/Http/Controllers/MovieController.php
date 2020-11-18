<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movies;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function list()
    {
        // Maak eigen versie van api
        $data = Http::withOptions(['verify' => false])->get('https://api.themoviedb.org/3/search/movie?api_key=5ea0116f21d92150567ce60ae3ae72c9&callback=test&query=pokemon')->body();

            //voer data door naar de view
            return view('movies', ['data'=>$data]);
    }
}
