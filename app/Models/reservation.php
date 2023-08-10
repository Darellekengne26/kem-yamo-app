<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_heure_reservation', 'description', 'num_table', 'nbre_place', 'occupation'
    ];

    /*make a belong to many relationship with reservation*/
    public function users():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
