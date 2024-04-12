<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Listing::create([
            'title' => 'Kaamulan Music Festival',
            'tags' => 'Music, Rock, OPM',
            'organizer' => 'Bukidnon Music Entertainment',
            'location' => 'Malaybalay City, Capitol Grounds',
            'email' => 'kaamulan@email.com',
            'description' => 'Join us for a euphoric celebration of music and culture at the Kaamulan Music Festival! 
            Held in the heart of downtown, this electrifying event brings together world-class musicians, passionate fans, 
            and vibrant performers for an unforgettable weekend of rhythm and soul.'
        ]); 

        Listing::create([
            'title' => 'Fliptop Music Fextival',
            'tags' => 'Music, Hiphop, Rap',
            'organizer' => 'Fliptop Entertainment',
            'location' => 'Pasay City, Music Theater',
            'email' => 'fliptop@email.com',
            'description' => 'Experience the rhythm, rhyme, and raw energy of the urban streets at our Fliptop Music Festival! 
            Join us for a celebration of the culture, beats, and creativity that define the hip-hop movement. 
            Immerse yourself in a world where music becomes poetry, and dance becomes an expression of life. 
            With electrifying performances from renowned artists, thrilling dance battles, and vibrant graffiti art showcases, 
            this festival is a homage to the roots and evolution of hip-hop. Get ready to feel the pulse of the city and groove 
            to the sounds of the streets at our unforgettable Fliptop Music Festival!'
        ]); 

        Listing::factory(7)->create();
    }
}
