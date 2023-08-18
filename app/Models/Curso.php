<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // informando os atributos do model
    protected $fillable = [
        'id',
        'nome',
        'sigla',
        'tipo'
    ];
}
