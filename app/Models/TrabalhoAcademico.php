<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TrabalhoAcademico extends Model
{
    use HasFactory;

    public function filterBy($request = null)
    {
        $result = DB::table('trabalho_academicos')->orderBy('created_at', 'desc')->where(function ($consulta) use ($request) {
            $consulta->where('titulo', 'ilike', "%{$request->titulo}%")
                ->where('tipo', 'ilike', "%{$request->tipo}%")
                ->where('data', 'ilike', "{$request->ano}%");
        })->paginate(config('app.pagination'));
        return $result;
    }
    
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
