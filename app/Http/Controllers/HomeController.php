<?php

namespace App\Http\Controllers;

use App\Models\TrabalhoAcademico;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function dashboard() {

        $trabalhos = TrabalhoAcademico::orderBy('created_at', 'desc')->paginate(25);

        //return view('trabalho-index', compact('trabalhos'));
        return view('dashboard', compact('trabalhos'));
    }
}
