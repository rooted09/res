<?php

namespace App\Http\Controllers\visitors;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Client;
use App\Models\User;


class Client_vController extends Controller
{
    public function index()
    {
        return view('visitors.client.profile');
    }
    public function edit(Request $request)
    {
        $request->validate([

            'password' => ['required', 'string', 'min:8'],
            'confirmed' => ['required', 'same:password'],

        ]);


        User::find(Auth::id())->update([
            'password' => Hash::make($request->password)
        ]);
        return redirect()->back()->with('success', 'bien modifier !!');
    }

    public function update(Request $request)
    {

        User::find(Auth::id())
            ->update([
                'name' => $request->nameU,
                'email' => $request->email,
            ]);

        Client::find(Auth::user()->client->id)
            ->update([
                'name' => $request->name,
                'prenom' => $request->prenom,
                'tele' => $request->tele
            ]);
        return redirect()->back()->with('success', 'bien modifier !!');
    }
}
