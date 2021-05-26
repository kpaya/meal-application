<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class MealController extends Controller
{
    public function index()
    {

        $meals = $this->searchIntoURL();
        return view('welcome', compact('meals'));
    }

    public function searchIntoURL()
    {
        $responseFromAPI = Http::get('https://www.themealdb.com/api/json/v1/1/search.php?s=');
        $responseDecoded = json_decode($responseFromAPI)->meals;
        return $responseDecoded;
    }
}
