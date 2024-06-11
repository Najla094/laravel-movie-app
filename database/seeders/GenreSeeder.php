<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    Genre::create([
        'name' => 'Shounen',
        'description' => 'Shōnen manga is an editorial category of Japanese comics targeting an audience of adolescent boys.',
    ]);

    Genre::create([
        'name' => 'Drama',
        'description' => 'Drama is a captivating literary genre that is brought to life through performance.',
    ]);

    Genre::create([
        'name' => 'School',
        'description' => ' It focuses on school students and is closely related to other genres such as slice of life, action, comedy, and especially romance.',
    ]);

    Genre::create([
        'name' => 'Horror',
        'description' => ' Horror fiction, horror stories, or horror stories are a genre of fictional stories that are intended to cause feelings of fear or horror in the listener.',
    ]);

    Genre::create([
        'name' => 'Fantasy',
        'description' => ' a story full of imagination and magic that invites the audience to fight against monsters, befriend fairies and fly through the sky with dragons.',
    ]);
}
}
