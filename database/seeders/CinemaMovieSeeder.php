<?php

namespace Database\Seeders;

use App\Models\CinemaMovie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CinemaMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('cinema_movies')->truncate();

        for ($i = 1; $i < 300; $i++) {
            try{
                CinemaMovie::create([
                    'total_seat' => rand(20,50),
                    'cinema_id' => rand(1,30),
                    'movie_id' => rand(1,20),
                ]);
            }
            catch (\Exception $exception){
                continue;
            }
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
