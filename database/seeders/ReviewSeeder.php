<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id' => 1,
            'poster' => 'movie-01.jpg',
            'user' => 'Laura',
            'rating' => 9.8,
            'date' => '20 April 2024',
        ]);

        Review::create([
            'id' => 2,
            'movie_id' => 2,
            'poster' => 'movie-02.jpg',
            'user' => 'Zayn',
            'rating' => 9.0,
            'date' => '12 Januari 2020',
        ]);

        Review::create([
            'id' => 3,
            'movie_id' => 3,
            'poster' => 'movie-03.jpg',
            'user' => 'Nasla',
            'rating' => 9.8,
            'date' => '12 Mei 2023',
        ]);

        Review::create([
            'id' => 4,
            'movie_id' => 4,
            'poster' => 'review-3.jpg',
            'user' => 'Laura',
            'rating' => 9.8,
            'date' => '20 Mei 2023',
        ]);

        Review::create([
            'id' => 5,
            'movie_id' => 5,
            'poster' => 'review-1.jpg',
            'user' => 'Rina',
            'rating' => 9.8,
            'date' => '19 Mei 2023',
        ]);
    }

}
