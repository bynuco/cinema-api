<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'cinema_movie_id', 'seat_number'];

    public function cinemaMovies(){
        return  $this->belongsTo(CinemaMovie::class,'id', 'cinema_movie_id');
    }
}
