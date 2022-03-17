<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Models\Commande;
use App\Models\Pannel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commande_vController extends Controller
{
    public function store($produit)
    {
        $user = Auth::user()->client->id;
        $commande = Pannel::create([
            'client_id' => $user,
            'produit_id' => $produit
        ]);

        return redirect()->back();
    }
}
