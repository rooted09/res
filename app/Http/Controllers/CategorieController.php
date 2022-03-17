<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Restaurant;
use App\Http\Requests\StoreCategorieRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $rest_id)
    {
        $request->validate([
            'name' => 'required|string'

        ]);

        $cat = Categorie::create([
            'name' => $request->name,

        ]);
        Restaurant::find($rest_id)->categorie()->attach([$cat->id]);

        return redirect()->back()->with('success', 'bien Ajouter !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorieRequest  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Categorie::find($id)
            ->update([
                'name' => $request->name
            ]);
        return redirect()->back()->with('success', 'bien modifier !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->back()->with('success', 'bien Supprimer !!');
    }
}
