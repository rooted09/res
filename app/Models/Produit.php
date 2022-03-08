<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    public function commande()
    {
        return $this->belongsToMany(Commande::class, 'commande_produits', 'produit_id' ,'commande_id');
    }
}
