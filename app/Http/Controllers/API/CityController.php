<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();

        return response()->json([
            "cities" => $cities
        ], ResponseAlias::HTTP_OK);
    }

    public function getCinemasByCityId($id){
        $city = City::where('id', $id)->first();

        $cityCinemas = $city->cinemas->map(function ($cinema){
            return [
                'id' => $cinema->id,
                'name' => $cinema->name,
            ];
        });

        return response()->json([
            "cinemas" => $cityCinemas
        ], ResponseAlias::HTTP_OK);
    }
}
