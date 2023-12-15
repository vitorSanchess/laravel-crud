<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Movie;
use App\Models\Game;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Movie::create([
            'title' => 'The Godfather',
            'genre' => 'Crime, Drama',
            'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
        ]);

        Movie::create(
            [
                'title' => 'Pulp Fiction',
                'genre' => 'Crime, Drama',
                'description' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
            ]
        );

        Movie::create(
            [
                'title' => 'The Dark Knight',
                'genre' => 'Action, Crime, Drama',
                'description' => 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
            ]
        );

        Movie::create(
            [
                'title' => 'Inception',
                'genre' => 'Action, Adventure, Sci-Fi',
                'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
            ]
        );

        Movie::create(
            [
                'title' => 'The Matrix',
                'genre' => 'Action, Sci-Fi',
                'description' => 'When a beautiful stranger leads computer hacker Neo to a forbidding underworld, he discovers the shocking truth--the life he knows is the elaborate deception of an evil cyber-intelligence.',
            ]
        );

        Movie::create(
            [
                'title' => 'Fight Club',
                'genre' => 'Drama',
                'description' => 'An insomniac office worker and a devil-may-care soap maker form an underground fight club that evolves into much more.',
            ]
        );

        Movie::create(
            [
                'title' => 'Forrest Gump',
                'genre' => 'Drama, Romance',
                'description' => 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold from the perspective of an Alabama man with an IQ of 75, whose only desire is to be reunited with his childhood sweetheart.',
            ]
        );

        Game::create(
            [
                'name' => 'The Witcher 3: Wild Hunt',
                'studio' => 'CD Projekt',
                'releaseDate' => '19/05/2015',
            ]
        );

        Game::create(
            [
                'name' => 'Red Dead Redemption 2',
                'studio' => 'Rockstar Games',
                'releaseDate' => '26/10/2018',
            ]
        );

        Game::create(
            [
                'name' => 'The Last of Us Part II',
                'studio' => 'Naughty Dog',
                'releaseDate' => '19/06/2020',
            ]
        );

        Game::create(
            [
                'name' => 'God of War',
                'studio' => 'Santa Monica Studio',
                'releaseDate' => '20/04/2018',
            ]
        );

        Game::create(
            [
                'name' => 'Uncharted 4: A Thief’s End',
                'studio' => 'Naughty Dog',
                'releaseDate' => '10/05/2016',
            ]
        );

        Game::create(
            [
                'name' => 'The Legend of Zelda: Breath of the Wild',
                'studio' => 'Nintendo',
                'releaseDate' => '03/03/2017',
            ]
        );

        Game::create(
            [
                'name' => 'Horizon Zero Dawn',
                'studio' => 'Guerrilla Games',
                'releaseDate' => '28/02/2017',
            ]
        );

        Game::create(
            [
                'name' => 'Final Fantasy VII Remake',
                'studio' => 'Square Enix',
                'releaseDate' => '10/04/2020',
            ]
        );

        Game::create(
            [
                'name' => 'Resident Evil 2',
                'studio' => 'Capcom',
                'releaseDate' => '25/01/2019',
            ]
        );
    }
}
