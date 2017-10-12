<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;


class MealController extends Controller
{
    public function index()
    {
        if (request()->has('kategorija'))
        {
            $meals = Meal::where('kategorija', request('kategorija'))
                ->paginate(2)
                ->appends('kategorija', request('kategorija'));
        }
        elseif (\request()->has('sort'))
        {
            $meals = Meal::orderBy('naziv',\request('sort'))
                ->paginate(2)->appends('sort',\request('sort'));
        }
        else
            {
            $meals = Meal::paginate(5);
            }

        return view('meals')->with('meals', $meals);
    }
}