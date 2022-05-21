<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name','city_id'];

    public function movie(){
        return $this->hasMany(CinemaMovie::class,'cinema_id');
    }
}
