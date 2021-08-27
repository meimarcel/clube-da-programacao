<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TrabalhoAcademico;

class TrabalhoAcademicoController extends Controller
{
    public function create() {
        return view('trabalho-create');
    }

    
}