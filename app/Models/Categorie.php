<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['name'];
    use HasFactory;

    /**
     * Get the user that owns the Categorie
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function produit()
    {
        return $this->hasMany(Produit::class);
    }

    public function restaurant()
    {
        return $this->belongsToMany(Restaurant::class, 'categorie_restaurants', 'categorie_id', 'restaurant_id');
    }
}
