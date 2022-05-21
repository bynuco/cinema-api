<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CinemaMovie;
use App\Models\Ticket;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class MovieController extends Controller
{
    public function seats($cinemaMovieId)
    {

        $total_seat = CinemaMovie::findOrFail($cinemaMovieId)->total_seat;

        $cinemaMovieSoldSeats = Ticket::where('cinema_movie_id', $cinemaMovieId)
            ->pluck('seat_number')
            ->toArray();

        $freeSeats = [];
        for ($i = 1; $i <= $total_seat; $i++) {
            if (!in_array($i, $cinemaMovieSoldSeats)) {
                $freeSeats[] = $i;
            }
        }

        return response()->json([
            "available_seats" => $freeSeats
        ], ResponseAlias::HTTP_OK);
    }
}
