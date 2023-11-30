<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class garage extends Model
{
    use HasFactory,    SoftDeletes;
    protected $fillable = [

        'gerant',
        'mail',
        'phone',
        'postal',
        'ville',
        'adresse',
        'garage',
        'description',
        'is_garage',
        'user_id',
        'lat',
        'lng',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
