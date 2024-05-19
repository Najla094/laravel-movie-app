<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'movie' => 'One Piece',
            'poster' => 'review-1.jpg',
            'user' => 'Laura',
            'rating' => 9.8,
            'date' => '20 April 2024',
        ],
        [
            'id' => 2,
            'movie' => 'Haikyuu',
            'poster' => 'review-2.jpg',
            'user' => 'Zayn',
            'rating' => 9.0,
            'date' => '12 Januari 2020',
        ],
        [
            'id' => 3,
            'movie' => 'Spirited Away',
            'poster' => 'review-3.jpg',
            'user' => 'Nasla',
            'rating' => 9.8,
            'date' => '12 Mei 2023',
        ],
        [
            'id' => 4,
            'movie' => 'RE-MAIN',
            'poster' => 'review-4.jpg',
            'user' => 'Raisyah',
            'rating' => 8.9,
            'date' => '09 Juni 2022',
        ],
        [
            'id' => 5,
            'movie' => 'Mieruko-chan',
            'poster' => 'review-5.jpg',
            'user' => 'Rika chan',
            'rating' => 9.7,
            'date' => '20 Desember 2022',
        ],
    ];

    public function getAllReview()
    {
        return $this->reviews;
    }
}
