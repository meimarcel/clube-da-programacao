<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrabalhoAcademico;

class TrabalhoAcademicoController extends Controller
{

    public function index()
    {
        $trabalhos = TrabalhoAcademico::orderBy('created_at', 'desc')->paginate(25);
        return view('trabalho-index', ['trabalhos' => $trabalhos]);
    }

    public function create()
    {
        return view('trabalho-create');
    }


    public function filtro(Request $request)
    {
        $trabalhoModel = new TrabalhoAcademico();
        $inputs = array_filter($request->except('_token'));
       
        $todosTrabalhos = TrabalhoAcademico::orderBy('created_at', 'desc')->paginate(5);
        
        if ($request->ajax()) {
            $trabalhosFiltrados = $trabalhoModel->filterBy(isset($request) ? $request : "");

            $respostas = [
                'trabalhosFiltrados' => $trabalhosFiltrados,
                'todosTrabalhos' => $todosTrabalhos,
                'semTrabalho' => ($trabalhosFiltrados->total() == 0)
            ];
            echo json_encode($respostas);
        } else {
            $trabalhosFiltrados = $trabalhoModel->filterBy(isset($request) ? $request : "");
            return view('trabalho-index', ['trabalhos' => $trabalhosFiltrados]);
        }
    }

    public function store(Request $request)
    {

        try {
            $trabalho = TrabalhoAcademico::create($request->all());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withInput()
                ->withErrors("Ops! Não foi possível efetuar o cadastro - code: {$e->getCode()}");
        }

        return redirect()->back()->with('success', "Trabalho cadastrado!");
    }
}
