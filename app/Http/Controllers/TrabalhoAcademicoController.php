<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrabalhoAcademico;

class TrabalhoAcademicoController extends Controller
{

    public function index()
    {
        $trabalhos = TrabalhoAcademico::orderBy('created_at', 'desc')->paginate(25);

        return view('trabalho-index', compact('trabalhos'));
    }

    public function create()
    {
        return view('trabalho-create');
    }

    public function edit($id)
    {
        return view('trabalho-create', ['trabalho'=>TrabalhoAcademico::findOrFail($id)]);
    }

    public function filtro(Request $request)
    {
        $model = new TrabalhoAcademico();
        $filtros = $request->except('_token');
        $trabalhos = $model->filterBy($request);
        return view('trabalho-index', compact('trabalhos', 'filtros'));
    }

    public function store(Request $request)
    {

        try {
            $trabalho = TrabalhoAcademico::create($request->all());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withInput()
                ->withErrors("Ops! Não foi possível efetuar o cadastro - code: {$e->getCode()}");
        }

        return redirect()->route('trabalhos.edit', $trabalho->id)
            ->with('success', "Trabalho cadastrado!");
    }

    public function update(Request $request, $id) 
    {
        $trabalho = TrabalhoAcademico::findOrFail($id);
        try {
            $trabalho->update($request->all());
        } catch(\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withInput()
                ->withErrors("Ops! Não foi possível atualizar o trabalho - code: {$e->getCode()}");
        }

        return redirect()->route('trabalho.edit', $trabalho->id)
            ->with('success', "Trabalho atualizado!");
    }

    public function show($id) {

        $trabalho = TrabalhoAcademico::findOrFail($id);

        return view('show', ['trabalho' => $trabalho]);
        
    }
}
