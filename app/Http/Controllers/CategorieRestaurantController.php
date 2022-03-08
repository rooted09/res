<?php

namespace App\Http\Controllers;

use App\Models\Categorie_restaurant;
use App\Http\Requests\StoreCategorie_restaurantRequest;
use App\Http\Requests\UpdateCategorie_restaurantRequest;

class CategorieRestaurantController extends Controller
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
     * @param  \App\Http\Requests\StoreCategorie_restaurantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorie_restaurantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie_restaurant  $categorie_restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie_restaurant $categorie_restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie_restaurant  $categorie_restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie_restaurant $categorie_restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorie_restaurantRequest  $request
     * @param  \App\Models\Categorie_restaurant  $categorie_restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorie_restaurantRequest $request, Categorie_restaurant $categorie_restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie_restaurant  $categorie_restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie_restaurant $categorie_restaurant)
    {
        //
    }
}
