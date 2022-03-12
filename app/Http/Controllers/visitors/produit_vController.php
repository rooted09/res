<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;

class produit_vController extends Controller
{
    public function index()
    {
        
        $produits =  Produit::all();
        return view('visitors.produit.index',
        [
            'produits' => $produits
        ]);
    
    }
}
