<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TrabalhoAcademico;

class TrabalhoAcademicoController extends Controller
{
    public function show() {
        return view('savework');
    }

    
}