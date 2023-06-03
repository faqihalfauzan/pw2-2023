<?php

namespace Database\Seeders;

use App\Models\Reviews;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reviews::create([

            'film' => 'Parasite',
            'user' => 'Song Kang Ho',
            'rating' => '9.5',
            'reviews' => 'Drama, Thriller,Thrillingly played by a flawless ensemble cast who hit every note and harmonic resonance of Bong and co-writer Han Jin-won’s multitonal script, it’s a tragicomic masterclass that will get under your skin and eat away at your cinematic soul',
            'tanggal' => '2019',
            
        ]);
        Reviews::create([
            'film' => 'Avangers: Endgame',
            'user' => 'Joe Russo',
            'rating' => '8.6',
            'reviews' => 'Action, Adventure, Sci-Fi,The less you know going into Avengers: Endgame, the more you’re likely to enjoy it. Obviously, you wouldn’t have clicked on a review of this movie if you didn’t want to know something about the culmination of a decade’s worth of Marvel’s superhero storytelling, but trust me: more than Avengers: Infinity War, more than any Star Wars movie, Endgame is truly a story that needs to be experienced. Forget all the external noise from the deliberately vague teaser trailers, perfectly-calibrated celebrity soundbites, and footage leaks, and just strap in for the ride.',
            'tanggal' =>'2019',
        ]);
        Reviews::create([
            'film' => 'The Godfather',
            'user' => 'Richard.s',
            'rating' => '9.3',
            'reviews' => 'Crime, Drama, THE GODFATHER: Gangster epic. Starring Marlon Brando, Al Pacino, James Caan, Robert Duvall and Diane Keaton. Directed by Francis Ford Coppola. Written by Coppola and Mario Puzo. (R. 175 minutes. At the Castro through April 3.)',
            'tanggal' => '1972',
        ]);
        Reviews::create([
            'film' => 'The Dark Knighr',
            'user' => 'Crishtoper Nolan',
            'rating' => '9.8',
            'reviews' => 'Action, Crime, Drama, Thriller, Karya-karya film Nolan juga berhasil membuatnya meraih 26 nominasi dan tujuh kemenangan piala Oscar. Sepanjang karirnya, Christopher Nolan telah menyutradarai sepuluh film dengan beragam genre.',
            'tanggal' =>'2008',
            
        ]);
    }
}
