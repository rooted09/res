<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
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
    public function store(Request $request, Categorie $id)
    {
        $filenameWithExt = $request->file('image')->getClientOriginalName();
        //Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('image')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        // Upload Image
        $request->logo->move(public_path('products'), $fileNameToStore);
        $request->validate([
            'name'=> 'required|string|max:25',
            'prix'=> 'required|numeric',
             'disponibilite'=> 'required',
            'duree'=> 'required',
            'description'=> 'required'
        ]);
       $produit = Produit::create([
           'categorie_id'=>$id->id,
           'name'=> $request->name,
           'image'=> $filename,
            'prix'=> $request->prix,
            'disponibilite'=> $request->disponibilite,
            'duree_preparation'=> $request->duree,
            'desc'=> $request->description
       ]);
       return redirect()->route('restaurant.show',['id' => $id->restaurant->first()]);
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
