<?php

namespace App\Http\Controllers;

use App\Models\Produit;

use App\Http\Requests\UpdateProduitRequest;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Produits =  Produit::all();
        return view('backoffice.produit.index',
        [
            'produits' => $Produits
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('backoffice.produit.add',['id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required|string|max:25',
            'prix'=> 'required|numeric',
             'disponibilite'=> 'required',
            'duree'=> 'required',
            'description'=> 'required'
        ]);
       $produit = Produit::create([
           'categorie_id'=>$id,
           'name'=> $request->name,
           'image'=> 'image',
            'prix'=> $request->prix,
            'disponibilite'=> $request->disponibilite,
            'duree_preparation'=> $request->duree,
            'desc'=> $request->description
       ]);
       return redirect()->route('restaurant.show',['id' => $produit->categorie->restaurant->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit($produit)
    {
        $vid=Produit::find($produit);
        return view('backoffice.produit.edit',['produit' => $vid]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduitRequest  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $produit)
    {   
        $request->validate([
            'name'=> 'required|string|max:25',
            'prix'=> 'required|numeric',
             'disponibilite'=> 'required',
            'duree'=> 'required',
            'description'=> 'required'
        ]);
        Produit::find($produit)->update(
            [
            'categorie_id'=>1,
            'name'=> $request->name,
             'prix'=> $request->prix,
             'disponibilite'=> $request->disponibilite,
             'duree_preparation'=> $request->duree,
             'desc'=> $request->description
            ]
            );
    
            return redirect()->route('produit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy($produit)
    {
        Produit::find($produit)->delete();
        return redirect()->route('produit.index');
    }
}
