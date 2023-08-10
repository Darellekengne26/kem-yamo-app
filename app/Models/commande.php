<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class commande extends Model
{
    use HasFactory;
    protected $fillable = [
       'nom', 'localisation', 'heure_livraison', 'nbre_produit'
    ];

    /*make a belong to many relationship with commande*/
    public function users():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function produits():BelongsTo
    {
        return $this->belongsTo(produit::class);
    }
}
