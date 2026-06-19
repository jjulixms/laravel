<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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


Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal']);


Route::prefix('/dashboard')->group(function(){

    Route::get('/index', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

});


Route::prefix('/tarefas')->group(function(){

    Route::get('/index', [App\Http\Controllers\TarefaController::class, 'index'])->name('tarefas.index');

    Route::post('/add', [App\Http\Controllers\TarefaController::class, 'add'])->name('tarefas.add');
    Route::post('/concluir/{id}',[App\Http\Controllers\TarefaController::class,'concluir'])->name('tarefas.concluir');
    Route::post('/remove/{id}',[App\Http\Controllers\TarefaController::class,'remove'])->name('tarefas.remove');
});


Route::prefix('/estudos')->group(function(){

    Route::get('/index', [App\Http\Controllers\EstudoController::class, 'index'])->name('estudos.index');

});


Route::prefix('/calendario')->group(function(){

    Route::get('/index', [App\Http\Controllers\CalendarioController::class, 'index'])->name('calendario.index');

});



    Route::prefix('/metas')->group(function(){

        Route::get('/index',[App\Http\Controllers\MetaController::class,'index']) ->name('metas.index');
        
        Route::post('/add',[App\Http\Controllers\MetaController::class,'add'])->name('metas.add');
        
        Route::post('/edit/{id}',[App\Http\Controllers\MetaController::class,'edit']) ->name('metas.edit');
     
        Route::post('/remove/{id}',[App\Http\Controllers\MetaController::class,'remove'])->name('metas.remove'); });


Route::prefix('/comunidade')->group(function(){

    Route::get('/index',
    
    [App\Http\Controllers\ComunidadeController::class,
    'index'])
    
    ->name('comunidade.index');
    
    
    Route::post('/add',
    
    [App\Http\Controllers\ComunidadeController::class,
    'add'])
    
    ->name('comunidade.add');
    
    
    Route::post('/remove/{id}', [App\Http\Controllers\ComunidadeController::class,'remove'])->name('comunidade.remove');
    
    
    Route::post('/edit/{id}',[App\Http\Controllers\ComunidadeController::class,'edit'])->name('comunidade.edit');
    
    });


Route::prefix('/perfil')->group(function(){

    Route::get('/index', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil.index');

});