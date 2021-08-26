<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrabalhoAcademicoController;
use App\Models\TrabalhoAcademico;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/cadastro', [TrabalhoAcademicoController::class, 'show']) -> middleware(['auth'])->name('show');

require __DIR__.'/auth.php';
