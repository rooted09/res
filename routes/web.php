<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\categorieController;
use App\Http\Controllers\CommandeController;

// Admin Controllers
use App\Http\Controllers\Backoffice\DashboardController;
use App\Http\Controllers\Backoffice\filter_controller;
use App\Http\Controllers\visitors\produit_vController;
use App\Http\Controllers\visitors\Client_vController;
use App\Http\Controllers\visitors\restaurant_vController;
use App\Http\Controllers\visitors\commande_vController;

use GuzzleHttp\Middleware;

// begin admin routes
Route::prefix('admin')->group(function () {
    // admins login routes
    Route::get('login', [AdminController::class, 'index'])->name('admin.login');
    Route::post('login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('logout', [AdminController::class, 'logout'])->name('admin.logout');


    Route::middleware('auth:admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index']);
        Route::get('/dashboad', [DashboardController::class, 'index'])->name('home.home');
        // restaurant routes
        Route::prefix('restaurant')->name('restaurant.')->group(function () {
            Route::get('add', [RestaurantController::class, 'create'])->name('add');
            Route::post('store', [RestaurantController::class, 'store'])->name('insert');
            Route::get('/', [RestaurantController::class, 'index'])->name('index');
            Route::get('/edit/{id}', [RestaurantController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [RestaurantController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [RestaurantController::class, 'destroy'])->name('delete');
            Route::get('show/{id}', [RestaurantController::class, 'show'])->name('show');
        });


        // categories routes
        Route::prefix('categorie')->name('categorie.')->group(function () {
            Route::get('', [categorieController::class, 'index'])->name('index');
            Route::get('add', [categorieController::class, 'create'])->name('add');
            Route::post('store/{id}', [categorieController::class, 'store'])->name('store');
            Route::get('edit/{id}', [categorieController::class, 'edit'])->name('edit');
            Route::post('update/{id}', [categorieController::class, 'update'])->name('update');
            Route::get('delete/{categorie}', [categorieController::class, 'destroy'])->name('delete');
        });
        // });
        // clients routes
        Route::prefix('client')->name('client.')->group(function () {
            Route::get('', [ClientController::class, 'index'])->name('index');
            Route::get('add', [ClientController::class, 'create'])->name('add');
            Route::post('store', [ClientController::class, 'store'])->name('store');
            Route::get('edit/{id}', [ClientController::class, 'edit'])->name('edit');
            Route::post('update/{id}', [ClientController::class, 'update'])->name('update');
            Route::get('delete/{id}', [ClientController::class, 'destroy'])->name('delete');
        });
        // produits routes 
        Route::prefix('produit')->name('produit.')->group(function () {
            Route::get('add/{id}', [ProduitController::class, 'create'])->name('add');
            Route::post('store/{id}', [ProduitController::class, 'store'])->name('insert');
            Route::get('/', [ProduitController::class, 'index'])->name('index');
            Route::get('/edit/{id}', [ProduitController::class, 'edit'])->name('edit');
            Route::post('/update/{produit}', [ProduitController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [ProduitController::class, 'destroy'])->name('delete');
        });
        Route::prefix('commande')->name('commande.')->group(function () {
            Route::get('/', [CommandeController::class, 'index'])->name('index');
            Route::get('/delete/{id}', [CommandeController::class, 'destroy'])->name('delete');
            Route::get('show/{id}', [CommandeController::class, 'show'])->name('show');
            Route::get('etat/{commande}', [CommandeController::class, 'update_etat'])->name('etat'); 
            Route::post('filtrage', [filter_controller::class, 'filter'])->name('filter');
        });

        Route::prefix('auth')->name('auth.')->group(function () {
            Route::get('/', [AdminController::class, 'show'])->name('show');
            Route::post('update', [AdminController::class, 'update'])->name('update');
            Route::post('edit', [AdminController::class, 'edit'])->name('edit');
        });
    });
    // end admin routes
});



// begin visitors routes
Route::middleware('auth')->group(function () {
    // client routes 

    Route::prefix('auth')->name('authc.')->group(function () {
        Route::get('/', [Client_vController::class, 'index'])->name('show');
        Route::get('/update', [Client_vController::class, 'update'])->name('update');
        Route::post('edit', [Client_vController::class, 'edit'])->name('edit');
        
    });

    Route::get('/commande/{id}', [commande_vController::class, 'store'])->name('c_insert');

});


    // produitsCard routes 
    Route::prefix('Restaurant')->name('produitC.')->group(function () {
        Route::get('/{id}', [produit_vController::class, 'index'])->name('show');
    });
    Route::get('/rest', [restaurant_vController::class, 'index'])->name('list');
    Route::get('/add_to_card/{produit}', [produit_vController::class,'AddToCart'])->name('AddToCart'); 
    Route::get('/delete_card', [produit_vController::class,'destroy'])->name('deleteCard');
    Route::get('/restaurant/{restaurant}', [restaurant_vController::class,'show'])->name('rest.show');
//end visitors routes


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
