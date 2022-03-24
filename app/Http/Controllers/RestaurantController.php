<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $restaurant = Restaurant::all();
        return view('backoffice.restaurant.index', ['restaurants' => $restaurant]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.restaurant.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRestaurantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:25',
            'adresse' => 'required',
            'tele' => 'required'
        ]);
        Restaurant::create([
            'name' => $request->name,
            'adresse' => $request->adresse,
            'tele' => $request->tele,
        ]);
        return redirect()->route('restaurant.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show($restaurant)
    {

        $rest = Restaurant::find($restaurant);
        return view('backoffice.restaurant.show', [
            'restaurant' => $rest
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = Restaurant::find($id);
        return view('backoffice.restaurant.edit', ['restaurant' => $restaurant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRestaurantRequest  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $restaurants)
    {
        Restaurant::find($restaurants)->update([
            'name' => $request->name,
            'adresse' => $request->adresse,
            'tele' => $request->tele,

        ]);
        return redirect()->route('restaurant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('restaurants')->where('id', $id)->delete();
        return back();
    }
}
