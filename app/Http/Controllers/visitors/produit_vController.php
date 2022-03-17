<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class produit_vController extends Controller
{
    public function index($rest_id)
    {
        
        $data =  Restaurant::find($rest_id);
        return view('visitors.produit.index',
        [
            'data' => $data
        ]);
    
    }
}
