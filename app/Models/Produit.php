<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = ['name','categorie_id','desc','prix','duree_preparation'];
    public function commande()
    { 
       
        return $this->belongsToMany(Commande::class, 'commande_produits', 'produit_id' ,'commande_id');
    }

}
