<?php

use App\Http\Controllers\CategoriaCnhController;
use App\Http\Controllers\CombustivelController;
use App\Http\Controllers\CorController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\MotoristaController;
use App\Http\Controllers\RetiradaController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\TipoMedidaController;
use App\Http\Controllers\VeiculoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/veiculos', [VeiculoController::class, 'index'])->name('veiculo');
    Route::post('/veiculos/cadastrar', [VeiculoController::class, 'cadastrar'])->name('veiculo.cadastrar');

    Route::get('/categoria-cnh', [CategoriaCnhController::class, 'index'])->name('categoria.cnh');
    Route::post('/categoria-cnh/cadastrar', [CategoriaCnhController::class, 'cadastrar'])->name('categoria.cnh.cadastrar');

    Route::get('/combustiveis', [CombustivelController::class, 'index'])->name('combustivel');
    Route::post('/combustiveis/cadastrar', [CombustivelController::class, 'cadastrar'])->name('combustivel.cadastrar');

    Route::get('/cores', [CorController::class, 'index'])->name('cor');
    Route::post('/cores/cadastrar', [CorController::class, 'cadastrar'])->name('cor.cadastrar');

    Route::get('/marcas', [MarcaController::class, 'index'])->name('marca');
    Route::post('/marcas/cadastrar', [MarcaController::class, 'cadastrar'])->name('marca.cadastrar');

    Route::get('/tipos', [TipoController::class, 'index'])->name('tipo');
    Route::post('/tipos/cadastrar', [TipoController::class, 'cadastrar'])->name('tipo.cadastrar');

    Route::get('/tipos-medida', [TipoMedidaController::class, 'index'])->name('tipo.medida');
    Route::post('/tipos-medida/cadastrar', [TipoMedidaController::class, 'cadastrar'])->name('tipo.medida.cadastrar');

    Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamento');
    Route::post('/departamentos/cadastrar', [DepartamentoController::class, 'cadastrar'])->name('departamento.cadastrar');

    Route::get('/motoristas', [MotoristaController::class, 'index'])->name('motorista');
    Route::post('/motoristas/cadastrar', [MotoristaController::class, 'cadastrar'])->name('motorista.cadastrar');

    Route::get('/modelos', [ModeloController::class, 'index'])->name('modelo');
    Route::post('/modelos/cadastrar', [ModeloController::class, 'cadastrar'])->name('modelo.cadastrar');

    Route::get('/retiradas', [RetiradaController::class, 'index'])->name('retirada');
    Route::post('/retiradas/cadastrar', [RetiradaController::class, 'cadastrar'])->name('retirada.cadastrar');

});

require __DIR__.'/auth.php';
