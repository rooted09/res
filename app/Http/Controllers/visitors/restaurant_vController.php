<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class restaurant_vController extends Controller
{
    public function index()
    {
        
        $restaurant = Restaurant::all();
        return view('visitors.listrestaurant',
        [
            'restaurant' => $restaurant
        ]);
    
    }
}
