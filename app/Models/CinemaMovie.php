<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CinemaMovie extends Model
{
    use HasFactory;

    protected $fillable = ['cinema_id','movie_id'];

    public function ticket(){
        return  $this->hasMany(Ticket::class,'cinema_movie_id');
    }
}
