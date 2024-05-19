<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'name' => 'Adventure',
            'description' => 'Adventure mengisahkan tentang perjalanan, penjelajahan dari para pemain atau tokohnya, Perjalanan ini untuk mencapai tujuan, ambisi, hingga misi tertentu.',
        ],
        [
            'id' => 2,
            'name' => 'Comedy',
            'description' => 'Anime yang bergenre comedy ialah anime yang biasanya manampilkan kisah yang menghibur dan membuat penonton tertawa.'
        ],
        [
            'id' => 3,
            'name' => 'Fantasy',
            'description' => 'Cerita anime bergenre fantasy yaitu cerita yang penuh imajinasi atau hal-hal yang biasanya tidak ada di dunia nyata.'
        ],
        [
            'id' => 4,
            'name' => 'Action',
            'description' => 'Anime yang bergenre action mengahadirkan cerita yang memilki petarung yang kuat, dan biasanya alur cerita yang sulit ditebak.'
        ],
        [
            'id' => 5,
            'name' => 'School Life',
            'description' => 'Anime bergenre school life menampilkan cerita yang alurnya kerap berlatar belakang kejadian-kejadian di sekolah.'
        ]
    ];

    public function getAllGenre()
    {
        return $this->genres;
    }
}
