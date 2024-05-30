<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function genre()
    {
        $genres = Genre::all();

        return view('genre', compact('genres'));
    }
}
