<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrabalhoAcademico;

class TrabalhoAcademicoController extends Controller
{
    public function create() {
        return view('trabalho-create');
    }

    public function store(Request $request) {

        try {
            $trabalho = TrabalhoAcademico::create($request->all());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withInput()
                ->withErrors("Ops! Não foi possível efetuar o cadastro - code: {$e->getCode()}");
        }

        return redirect()->back()->with('success', "Trabalho cadastrado!");
    }
}