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
        $result = DB::table('trabalho_academicos')->where(function ($consulta) use ($request) {

            $inputs = array_filter($request->except('_token'));

            $porNome = $request->nome;
            $porTipo = $request->tipo;
            $porAno = $request->ano;

            // Se pelo menos um input for preenchido
            if (count($inputs) > 0) {

                switch (count($inputs)) {
                    // Caso somente um input foi está preenchido, então qual deles
                    case 1:
                        // Se foi o input por nome, então filtrar por nome
                        if ($porNome) {
                            $consulta->where('titulo', 'like', "%{$porNome}%");
                        } 
                        // Se não, se foi o input por tipo, então filtra por tipo
                        elseif ($porTipo) { 
                            $consulta->where('tipo', 'like', "%{$porTipo}%");
                        } 
                        // Se não, se foi o input por tipo, então filtra por tipo
                        elseif ($porAno) { 
                            $consulta->where('data', 'like', "{$porAno}%");
                        }
                        break;

                        // Caso dois inputs foram, preenchidos, então quais
                    case 2:
                        // Se os inputs que estão preenchidos são o por nome e por tipo
                        if ($porNome && $porTipo) {
                            $consulta->where('titulo', 'like', "%{$porNome}%")
                                ->where('tipo', 'like', "%{$porTipo}%");
                        }
                        // Se os inputs que estão preenchidos são o por nome e por ano
                        if ($porNome && $porAno) {
                            $consulta->where('titulo', 'like', "%{$porNome}%")
                                ->where('data', 'like', "{$porAno}%");
                        }
                        // Se os inputs que estão preenchidos são o por tipo e por ano, então $consulta recebe trabalhos filtratos por tipo e por ano
                        if ($porTipo && $porAno) {
                            $consulta->where('tipo', 'like', "%{$porTipo}%")
                                ->where('data', 'like', "{$porAno}%");
                        }
                        break;
                        // caso os três inputs foram preenchidos, então $consulta  recebe todos trabalhos filtrados
                    case 3:
                        if ($porNome && $porTipo && $porAno) {
                            $consulta->where('titulo', 'like', "%{$porNome}%")
                                ->where('tipo', 'like', "%{$porTipo}%")
                                ->where('data', 'like', "{$porAno}%");
                        }
                        break;
                }
            }
        })->paginate(25);
        return $result;
    }
}
