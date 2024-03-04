<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\OrgaosController;

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

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'municipio'], function () {
    Route::get('/saocristovao', [MunicipioController::class, 'saocristovao'])->name('municipio.saocristovao');
    Route::get('/prefeito', [MunicipioController::class, 'prefeito'])->name('municipio.prefeito');
    Route::get('/vice-prefeito', [MunicipioController::class, 'viceprefeito'])->name('municipio.viceprefeito');
    Route::get('/prefeitura', [MunicipioController::class, 'prefeitura'])->name('municipio.prefeitura');
});

Route::group(['prefix' => 'noticia'], function () {
    Route::get('/{name}', [NoticiaController::class, 'post'])->name('noticia.post');
});

Route::group(['prefix' => 'orgaos'], function () {
    Route::get('/semas', [OrgaosController::class, 'semas'])->name('orgaos.semas');
    Route::get('/cgm', [OrgaosController::class, 'cgm'])->name('orgaos.cgm');
    Route::get('/semdes', [OrgaosController::class, 'semdes'])->name('orgaos.semdes');
    Route::get('/semdet', [OrgaosController::class, 'semdet'])->name('orgaos.semdet');
    Route::get('/semed', [OrgaosController::class, 'semed'])->name('orgaos.semed');
    Route::get('/semel', [OrgaosController::class, 'semel'])->name('orgaos.semel');
    Route::get('/semfop', [OrgaosController::class, 'semfop'])->name('orgaos.semfop');
    Route::get('/gapre', [OrgaosController::class, 'gapre'])->name('orgaos.gapre');
    Route::get('/gabvp', [OrgaosController::class, 'gabvp'])->name('orgaos.gabvp');
    Route::get('/segov', [OrgaosController::class, 'segov'])->name('orgaos.segov');
});
