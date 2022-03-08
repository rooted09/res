<?php

namespace App\Http\Controllers;

use App\Models\Commande_produit;
use App\Http\Requests\StoreCommande_produitRequest;
use App\Http\Requests\UpdateCommande_produitRequest;

class CommandeProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommande_produitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommande_produitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commande_produit  $commande_produit
     * @return \Illuminate\Http\Response
     */
    public function show(Commande_produit $commande_produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commande_produit  $commande_produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Commande_produit $commande_produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommande_produitRequest  $request
     * @param  \App\Models\Commande_produit  $commande_produit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommande_produitRequest $request, Commande_produit $commande_produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commande_produit  $commande_produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commande_produit $commande_produit)
    {
        //
    }
}
