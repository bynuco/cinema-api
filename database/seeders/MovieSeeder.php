<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('movies')->truncate();
        $movies = [
            [
                'name' => 'Harry Potter and the Philosopher\'s Stone',
                'year' => '2001',
                'genre' => 'Fantasy',
                'director' => 'Chris Columbus'
            ],
            [
                'name' => 'Harry Potter and the Chamber of Secrets',
                'year' => '2002',
                'genre' => 'Fantasy',
                'director' => 'Chris Columbus'
            ],
            [
                'name' => 'Harry Potter and the Prisoner of Azkaban',
                'year' => '2004',
                'genre' => 'Fantasy',
                'director' => 'Alfonso Cuarón'
            ],
            [
                'name' => 'Harry Potter and the Goblet of Fire',
                'year' => '2005',
                'genre' => 'Fantasy',
                'director' => 'Mike Newell'
            ],
            [
                'name' => 'Harry Potter and the Order of the Phoenix',
                'year' => '2007',
                'genre' => 'Fantasy',
                'director' => 'David Yates'
            ],
            [
                'name' => 'Harry Potter and the Half-Blood Prince',
                'year' => '2009',
                'genre' => 'Fantasy',
                'director' => 'David Yates'
            ],
            [
                'name' => 'Harry Potter and the Deathly Hallows – Part 1',
                'year' => '2010',
                'genre' => 'Fantasy',
                'director' => 'David Yates'
            ],
            [
                'name' => 'Harry Potter and the Deathly Hallows – Part 2',
                'year' => '2011',
                'genre' => 'Fantasy',
                'director' => 'David Yates'
            ],
            [
                'name' => 'The Fast and the Furious',
                'year' => '2001',
                'genre' => 'Action',
                'director' => 'Rob Cohen'
            ],
            [
                'name' => '2 Fast 2 Furious',
                'year' => '2003',
                'genre' => 'Action',
                'director' => 'John Singleton'
            ],
            [
                'name' => 'The Fast and the Furious: Tokyo Drift',
                'year' => '2006',
                'genre' => 'Action',
                'director' => 'Justin Lin'
            ],
            [
                'name' => 'Fast & Furious',
                'year' => '2009',
                'genre' => 'Action',
                'director' => 'Justin Lin'
            ],
            [
                'name' => 'Fast Five',
                'year' => '2011',
                'genre' => 'Action',
                'director' => 'Justin Lin'
            ],
            [
                'name' => 'Fast & Furious 6',
                'year' => '2013',
                'genre' => 'Action',
                'director' => 'Justin Lin'
            ],
            [
                'name' => 'Furious 7',
                'year' => '2015',
                'genre' => 'Action',
                'director' => 'James Wan'
            ],
            [
                'name' => 'The Fate of the Furious',
                'year' => '2017',
                'genre' => 'Action',
                'director' => 'F. Gary Gray'
            ],
            [
                'name' => 'F9',
                'year' => '2021',
                'genre' => 'Action',
                'director' => 'Justin Lin'
            ],
            [
                'name' => 'How to Train Your Dragon',
                'year' => '2010',
                'genre' => 'Animation',
                'director' => 'Dean DeBlois'
            ],
            [
                'name' => 'How to Train Your Dragon 2',
                'year' => '2014',
                'genre' => 'Animation',
                'director' => 'Dean DeBlois'
            ],
            [
                'name' => 'How to Train Your Dragon: The Hidden World',
                'year' => '2019',
                'genre' => 'Animation',
                'director' => 'Dean DeBlois'
            ]

        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
