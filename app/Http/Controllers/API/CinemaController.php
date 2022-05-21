<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CinemaMovie;
use App\Models\Movie;
use App\Models\Ticket;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class CinemaController extends Controller
{
    public function getMovies($id)
    {
        $cinemaMovies = CinemaMovie::where('cinema_id', $id)->get();

        $movies = Movie::select(['cinema_movies.id as cinema_movie_id','movies.name','movies.year','movies.director','movies.genre'])
            ->join('cinema_movies','movies.id','=','cinema_movies.movie_id')
            ->whereIn('movies.id', $cinemaMovies->pluck('movie_id'))->get();

        return response()->json([
            "movies" =>  $movies
        ], ResponseAlias::HTTP_OK);
    }
}
