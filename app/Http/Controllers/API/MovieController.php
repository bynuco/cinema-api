<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CinemaMovie;
use App\Models\Movie;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return response()->json([
            "movies" => $movies
        ], ResponseAlias::HTTP_OK);
    }

    public function getMoviesByCinemaId($id)
    {
        $cinemaMovies = CinemaMovie::where('cinema_id', $id)->get();
        $movies = Movie::whereIn('id', $cinemaMovies->pluck('movie_id'))->get();

        return response()->json([
            "movies" => $movies
        ], ResponseAlias::HTTP_OK);
    }
}
