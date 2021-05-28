<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MealController extends Controller
{
    public function index()
    {

        $meals = $this->searchIntoURL();
        return view('index', compact('meals'));
    }

    public function searchIntoURL($meal = '')
    {
        $responseFromAPI = Http::get('https://www.themealdb.com/api/json/v1/1/search.php?s=' . $meal);
        $responseDecoded = json_decode($responseFromAPI)->meals;
        return $responseDecoded;
    }

    public function searchMeals(Request $request)
    {
        $meals = $this->searchIntoURL($request->input('mealName'));
        return view('index', compact('meals'));
    }
}
