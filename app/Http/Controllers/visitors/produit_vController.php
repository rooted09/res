<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Jackiedo\Cart\Facades\Cart;
use Illuminate\Support\Facades\View;

class produit_vController extends Controller
{
    
    public function __construct() {

        $shoppingCart = Cart::name('shopping');
        View::share('card', $shoppingCart);
    }
    
    public function index($rest_id)
    {
        
        $data =  Restaurant::find($rest_id);
        return view('visitors.produit.index',
        [
            'data' => $data
        ]);
    
    }

    public function destroy() {

        Cart::name('shopping')->destroy();
        return redirect()->back();
    }

    public function AddToCart(Produit $produit) {
        $shoppingCart = Cart::name('shopping');
        $productItem  = $shoppingCart->addItem([
            'id'       => $produit->id,
            'title'    => $produit->name,
            "price" => $produit->prix
        ]);

        return redirect()->back();
        // return response()->json($shoppingCart->getDetails());
        // return response()->json($produit);

    }
}
