<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrabalhoAcademico extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo',
        'tipo',
        'autor',
        'orientador',
        'data',
        'curso',
        'idioma',
        'paginas',
        'resumo',
        'link'
    ];
}
