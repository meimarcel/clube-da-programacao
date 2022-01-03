<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrabalhoAcademico;

class TrabalhoAcademicoController extends Controller
{

    public function index()
    {
        $trabalhos = TrabalhoAcademico::orderBy('created_at', 'desc')->paginate(config('app.pagination'));

        return view('trabalho-index', compact('trabalhos'));
    }

    public function create()
    {
        return view('trabalho-create');
    }

    public function edit($id)
    {
        return view('trabalho-create', ['trabalho' => TrabalhoAcademico::findOrFail($id)]);
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
            if(!str_contains($request->get('link'),'https://') &&  !str_contains($request->get('link'),'http://')) {
                return redirect()->back()->withInput()
                ->withErrors("O link deve começar com 'https://' ou 'http://'");
            }
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
            if(!str_contains($request->get('link'),'https://') &&  !str_contains($request->get('link'),'http://')) {
                return redirect()->back()->withInput()
                ->withErrors("O link deve começar com 'https://' ou 'http://'");
            }
            $trabalho->update($request->all());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withInput()
                ->withErrors("Ops! Não foi possível atualizar o trabalho - code: {$e->getCode()}");
        }

        return redirect()->route('trabalhos.edit', $trabalho->id)
            ->with('success', "Trabalho atualizado!");
    }

    public function show($id)
    {

        $trabalho = TrabalhoAcademico::findOrFail($id);

        return view('trabalho-show', compact('trabalho'));
    }

    public function showAdmin($id)
    {
        $trabalho = TrabalhoAcademico::findOrFail($id);

        return view('trabalho-auth-show', compact('trabalho'));
    }

    public function dashboard()
    {
        $trabalhos = TrabalhoAcademico::orderBy('created_at', 'desc')->paginate(config('app.pagination'));
        return view('dashboard', compact('trabalhos'));
    }

    public function filtroDashboard(Request $request)
    {
        $modelDashboard = new TrabalhoAcademico();
        $filtros = $request->except('_token');
        $trabalhos = $modelDashboard->filterBy($request);
        return view('dashboard', compact('trabalhos', 'filtros'));
    }

    public function destroy(Request $request)
    {
        $ids = $request->ids;
        if (is_array($ids)) {
            TrabalhoAcademico::whereIn('id', $ids)->delete();
        } else {
            TrabalhoAcademico::findOrFail($ids)->delete();
        }

        if(isset($request->next)) {
            return redirect()->route('dashboard')->with('success', "Trabalho excluido com sucesso!");
        } else {
            return response()->json(['successMessage' => 'Trabalho excluido com sucesso!']);
        }
    }
}
