<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'prix',
    ];



    /*make a one to many relationship with commande*/
    public function commandes():HasMany
    {
        return $this->hasMany(commande::class);
    }

    /*make a one to many relationship with user*/
    public function users():HasMany
    {
        return $this->hasMany(User::class);
    }
}
