<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function genre()
    {
        $genre = New Genre();
        $genres = $genre->getAllGenre();

        return view('genre', ['genres' => $genres]);
    }
}
