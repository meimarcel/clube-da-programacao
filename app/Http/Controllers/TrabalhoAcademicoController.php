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

        $trabalhosTable = null;
        if ($request->ajax()) {
            $trabalhosFiltrados = $trabalhoModel->filterBy($request);

            if ($trabalhosFiltrados->total()>0) {
                foreach ($trabalhosFiltrados as $trabalho) {
                    $trabalhosTable .=  '
                        <tr>
                          <td>' . $trabalho->titulo . '</td>
                          <td>' . $trabalho->autor . '</td>
                          <td>' . $trabalho->tipo . '</td>
                         <td>' . date('Y', strtotime($trabalho->data)) . '</td>
                        </tr>';
                }
            } else {
                $trabalhosTable = '<tr>
                    <td align="center" colspan="5">Nenhum trabalho encontrado</td>
                    </tr>';
            }
            return Response($trabalhosTable);
        }
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
