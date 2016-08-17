<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;

class FoodController extends Controller
{
    public function food()
    {
        $food = Food::all();
        $categories = Category::all();
        return view('food', [
            'categories' => $categories,
            'foodList' => $food
        ]);
    }
}
