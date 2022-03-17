<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Http\Requests\StoreCommandeRequest;
use App\Http\Requests\UpdateCommandeRequest;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandes =  Commande::all();
        return view('backoffice.commande.index',
        [
            'commandes' => $commandes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('backoffice.commande.add',['id'=>$id]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommandeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommandeRequest $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function show(Commande $commande)
    {
        
       $commd= Commande::find($commande);
       return view('backoffice.commande.show',[
           'commande' => $commd
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommandeRequest  $request
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommandeRequest $request, Commande $commande)
    {
        
        

    }
    public function update_etat(Commande $commande)
    {
        $newetat = '';
        $etat = $commande->etat;
        $etat == 'commande'?$newetat ='prepare':'';
        $etat == 'prepare'?$newetat ='delivrer':'';
        $etat == 'delivrer'?$newetat ='confirmer':'';
        $etat == 'confirmer'?$newetat ='confirmer':'';

        $commande->update([
            'etat' => $newetat
        ]);

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commande $commande)
    {
        
        Commande::find($commande)->delete();
        return redirect()->back();
    }
}
