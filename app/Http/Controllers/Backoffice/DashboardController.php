<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Commande;
use App\Models\Client;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $commande = Commande::whereDate('created_at', now());
        $Client = Client::whereDate('created_at', now());
        return view('backoffice.dashboard', [
            'commande' => $commande,
            'client' => $Client
        ]);
    }
}
