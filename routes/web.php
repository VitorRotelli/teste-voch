<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/cadastro_unidades', [IndexController::class, 'create']); 
Route::post('/cadastrar_unidades_back', [IndexController::class, 'store'])->name('unidades.store');
Route::get('/sucesso', [IndexController::class, 'show'])->name('sucesso.store');
Route::get('/cadastro_colaborador', [IndexController::class, 'colaborador_cadastro']); 
Route::post('/cadastrar_colaboradores_back', [IndexController::class, 'cadastro_colaborador'])->name('colaboradores_cadastro.store');
Route::get('/editar_desempenho', [IndexController::class, 'edit'])->name('editar_desempenho');
Route::post('/atualizar_desempenho', [IndexController::class, 'updateDesempenho'])->name('atualizar_desempenho');
Route::get('/relatorios', [IndexController::class, 'relatorios_csv']);
Route::get('/relatorios_colaboradores', [IndexController::class, 'relatorios_csv_colaboradores']);
Route::get('/relatorios_unidades', [IndexController::class, 'relatorios_csv_unidades']);
Route::get('/relatorios_ranking', [IndexController::class, 'relatorios_csv_ranking']);


