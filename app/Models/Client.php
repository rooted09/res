<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'prenom', 'tele', 'user_id'];


    /**
     * Get the user that owns the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function commande()
    {
        return $this->hasOne(User::class);
    }
    public function produit()
    {
        return $this->belongsToMany(Produit::class, 'pannels');
    }
}
