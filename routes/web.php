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

Route::get('/dashboard/trabalhos/create', [TrabalhoAcademicoController::class, 'create']) -> middleware(['auth'])->name('trabalhos.create');

Route::get('/dashboard/trabalhos/{id}/edit', [TrabalhoAcademicoController::class, 'edit']) -> middleware(['auth'])->name('trabalhos.edit');

Route::post('/dashboard/trabalhos', [TrabalhoAcademicoController::class, 'store']) -> middleware(['auth'])->name('trabalhos.store');

Route::put('/dashboard/trabalhos/{id}', [TrabalhoAcademicoController::class, 'update']) -> middleware(['auth'])->name('trabalhos.update');

Route::get('/trabalhos', [TrabalhoAcademicoController::class, 'index']);

Route::any('/trabalhos/filtro', [TrabalhoAcademicoController::class, 'filtro'])->name('trabalhos.filtro');

Route::get('/trabalhos/{id}', [TrabalhoAcademicoController::class, 'show'])->name('trabalhos.show');

require __DIR__.'/auth.php';
