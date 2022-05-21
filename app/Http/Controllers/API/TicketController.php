<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CinemaMovie;
use App\Models\Ticket;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class TicketController extends Controller
{
    public function buy(Request $request){

        $total_seat = CinemaMovie::findOrFail($request->input('cinema_movie_id'))->total_seat;

        $validator = Validator::make(request()->all(), [
            'cinema_movie_id' => "required|integer",
            'seat_number' => "required|integer|between:1,$total_seat"
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                'status' => ResponseAlias::HTTP_BAD_REQUEST,
            ], ResponseAlias::HTTP_BAD_REQUEST);
        }

        $ticket = Ticket::create([
            'seat_number' => $request->input('seat_number'),
            'cinema_movie_id' => $request->input('cinema_movie_id'),
            'user_id' => Auth::user()->id
        ]);

        return response()->json([
            "ticket_information" => $ticket
        ], ResponseAlias::HTTP_OK);
    }
}
