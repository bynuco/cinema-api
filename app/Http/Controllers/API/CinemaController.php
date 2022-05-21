<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CinemaMovie;
use App\Models\Movie;
use DB;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class CinemaController extends Controller
{
    public function getMovies($id)
    {
        $movies = DB::table('cinema_movies')
            ->select('cinema_movies.id','total_seat','name','year','director','genre')
            ->join('movies','movies.id','=','cinema_movies.movie_id')
            ->where('cinema_id',$id)
            ->get();


        return response()->json([
            "movies" => $movies
        ], ResponseAlias::HTTP_OK);
    }
}
