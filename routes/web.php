<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RestaurantController;
// Admin Controllers
use App\Http\Controllers\Backoffice\DashboardController;


// begin admin routes
Route::prefix('admin')->group(function()   {
    // admins login routes
    Route::get('login', [AdminController::class,'index'])->name('admin.login');
    Route::post('login', [AdminController::class,'login'])->name('admin.login');

    // Route::middleware('auth:admin')->group(function()   {
        
        Route::get('/', [DashboardController::class,'index'])->name('admin.home');
    Route::prefix('restaurant')->name('restaurant.')->group(function(){
        Route::get('add', [RestaurantController::class,'create'])->name('add');  
        Route::post('store', [RestaurantController::class,'store'])->name('insert');
        Route::get('/', [RestaurantController::class,'index'])->name('index');
        Route::get('/edit/{id}',[RestaurantController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[RestaurantController::class,'update'])->name('update');
        Route::get('/delete/{id}',[RestaurantController::class,'destroy'])->name('delete');
        Route::get('show/{id}', [RestaurantController::class,'show'])->name('show');
    });



    // });
});

// end admin routes

// begin visitors routes
Route::middleware('auth:admin')->group(function()   {
});
//end visitors routes


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
