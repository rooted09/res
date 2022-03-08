<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the Restaurant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */


    public function categorie()
    {
        return $this->belongsToMany(Categorie::class, 'categorie_restaurants', 'categorie_id', 'restaurant_id');
    }
}
