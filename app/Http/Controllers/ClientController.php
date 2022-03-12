<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $clients =  Client::all();
        return view('backoffice.client.index',
        [
            'clients' => $clients
        ]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        return view('backoffice.client.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $request->validate([
        'name'=>'required|string',
        'nameutili'=>'required|string',
        'email'=>'required|email|unique:users,email',
        'prenom'=>'required|string',
        'password'=>'required|min:8',
        'tele'=>'required|string'
   ]);
        // $v1=Auth::id();
        $v1 = User::create([
            'name' => $request->nameutili,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Client::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'tele' => $request->tele,
            'user_id' => $v1->id
        ]);

        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($client)
    {
        $v2=Client::find($client);
        return view('backoffice.client.edit',['client' => $v2]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $client)
    {
        $client = Client::find($client);
        $request->validate([
            'name'=>'required|string',
            'nameutili'=>'required|string',
            'email'=>'required|email',
            'prenom'=>'required|string',
            'password'=>'min:8',
            'tele'=>'required|string'
       ]);
       $client->user->update([
        'name' => $request->nameutili,
        'email' => $request->email
        ]);
        $client->update(
        [
            'name' => $request->name,
            'prenom' => $request->prenom,
            'tele' => $request->tele
        ]
        );

        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($client)
    {
        User::find($client)->delete();
        return redirect()->back();
    }
}
