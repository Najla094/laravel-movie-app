<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function genre()
    {
        $genres = Genre::all();
        return view('genre.genre', compact('genres'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('genre.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',       
    ]);

    Genre::create($validatedData);
    return redirect('/genres')->with('success', 'Genre added successfully!');
    }

    public function destroy(Genre $genres)
    {
        $genres->delete();
        return redirect('/genres')->with('success', 'Genre deleted successfully!');
    }
}
