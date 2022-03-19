<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Models\Commande;
use App\Models\Pannel;
use Illuminate\Http\Request;
use Jackiedo\Cart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class commande_vController extends Controller
{
    public function store($restaurant)
    {
        $shoppingCart = Cart::name('shopping');
        $user = Auth::user()->client->id;
        $commande = Commande::create([
            'client_id' => $user,
            'restaurant_id'=>$restaurant,
            'prix' => $shoppingCart->getItemsSubtotal()
        ]);
           $data = [];
           foreach($shoppingCart->getDetails()->get('items') as $item) {
            array_push($data, [
                    'produit_id'=> $item->get('id'),
                    'quantite' =>$item->get('quantity')
                ]);
           }
        $commande->produit()->attach($data);
        Cart::name('shopping')->destroy();
            // return  $data;
        return redirect()->back();
    }
}
