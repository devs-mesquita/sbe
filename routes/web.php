<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CurriculosController;
use App\Http\Controllers\AreasController;

// tela de login
Route::get('/', [AuthController::class, 'login']);

// função de logar
Route::post('/login', [AuthController::class, 'entrar'])->name('entrar');

Route::group(['middleware' => 'auth'], function () {

    Route::resources([
		'curriculos' => CurriculosController::class,
		'areas'	   => AreasController::class,
		
	]);



	Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/curriculos', [CurriculosController::class, 'index'])->name('curriculos.index');
    Route::get('/cadastrocurriculos', [CurriculosController::class, 'create'])->name('curriculos.create');
    Route::post('/curriculos', [CurriculosController::class, 'store'])->name('curriculos.store');
    Route::get('/encaminhados', [CurriculosController::class, 'encaminhados'])->name('encaminhados');
    Route::get('/excluidos', [CurriculosController::class, 'excluidos'])->name('excluidos');
    Route::get('/relatorios', [CurriculosController::class, 'relatorios'])->name('relatorios');
    
 

}
);


