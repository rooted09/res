<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['client_id','restaurant_id','etat','prix'];


    /**
     * The roles that belong to the Commande
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function produit()
    {
        return $this->belongsToMany(Produit::class, 'commande_produits', 'commande_id', 'produit_id');
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
