<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appoinement extends Model
{
    /* $table->string('firstname', 300);
    $table->string('lastname', 300);
    $table->string('mail', 300);
    $table->string('phone', 300);
    $table->string('mark', 300);
    $table->string('model', 300);
    $table->string('annee', 300);
    $table->string('offrespecial', 300);
    $table->string('attendre', 300);
    $table->string('emplacement', 300);

    $table->string('premier_choix', 300);
    $table->string('premier_heure', 300);

    $table->string('deux_choix', 300);
    $table->string('deux_heure', 300);

    $table->string('description', 300)->nullable(); */
    use HasFactory, SoftDeletes;
    protected $fillable = [

        'firstname',
        'lastname',
        'mail',
        'phone',
        'mark',
        'model',
        'annee',
        'offrespecial',
        'attendre',
        'emplacement',
        'premier_choix',
        'premier_heure',
        'agree',
        'deux_choix',
        'deux_heure',
        'description',
    ];
}
