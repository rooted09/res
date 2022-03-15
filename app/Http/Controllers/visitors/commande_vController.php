<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commande_vController extends Controller
{
    public function store($restaurant)
    {
        $user=Auth::user()->client->id;
        $commande = Commande::create([
            'client_id'=>$user,
            'restaurant_id'=>$restaurant
        ]);
        
        return redirect()->back();
    }
}
