<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'categorie_id', 'desc', 'prix', 'duree_preparation', 'image', 'disponibilite'];

    public function commande()
    {
        return $this->belongsToMany(Commande::class, 'commande_produits', 'produit_id', 'commande_id');
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function client()
    {
        return $this->belongsToMany(Client::class, 'pannels');
    }
}
