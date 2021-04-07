<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Beer;

class ApiController extends Controller
{
    public function __invoke()
    {
        $beers = Beer::all();

        return response()->json($beers);


    }
}
