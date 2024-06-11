<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Movie;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function review()
    {
        $reviews = Review::all();

        return view('review.review', compact('reviews'));
    }

    public function create()
    {
        $movies = Movie::all();
        return view('review.create', compact('movies'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'movie_id' => 'required',
        'user' => 'required',
        'rating' => 'required',
        'date' => 'required',
        'poster' => 'required',
    ]);

        Review::create($validatedData);

        return redirect('/reviews')->with('success', 'Review added successfully!');
    }

    public function destroy(Review $reviews)
    {
        $reviews->delete();
        return redirect('/reviews')->with('success', 'Review deleted successfully!');
    }
}