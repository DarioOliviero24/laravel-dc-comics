<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comic::truncate();

        $comics = config('comics');

        foreach ($comics as $singleComic){
            $comic = new Comic();
            $comic->title = $singleComic['title'];
            $comic->description = $singleComic['description'];
            $comic->thumb = $singleComic['thumb'];
            $comic->price = $singleComic['price'];
            $comic->series = $singleComic['series'];
            $comic->sale_date = $singleComic['sale_date'];
            $comic->type = $singleComic['type'];
            $jsonArtists = json_encode($singleComic['artists']);
            $comic->artists = $jsonArtists;
            $jsonWriters = json_encode($singleComic['writers']);
            $comic->writers = $jsonWriters;
            $comic-> save();

        }
    }
}
