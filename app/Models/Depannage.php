<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Depannage extends Model
{
    use HasFactory ,     SoftDeletes;

    protected $fillable = [

        'name',
        'mail',
        'phone',
        'prenom',
        'garage',
        'status',
        'ip',
        'description',
    ];
}
