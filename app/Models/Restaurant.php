<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;
class Restaurant extends Model
{
    use HasFactory, Commentable;
    protected $fillable = ['name','adresse','tele'];

    /**
     * Get the user that owns the Restaurant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */


    public function categorie()
    {
        return $this->belongsToMany(Categorie::class, 'categorie_restaurants', 'restaurant_id', 'categorie_id');
    }
}
