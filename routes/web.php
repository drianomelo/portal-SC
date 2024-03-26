<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\OrgaosController;
use App\Http\Controllers\ConselhosController;

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

Route::get('/ouvidoria', function () {
    return view('ouvidoria.index');
})->name('ouvidoria');

Route::get('/cep', function () {
    return view('cep.index');
})->name('cep');

Route::group(['prefix' => 'contribuinte'], function () {
    Route::get('/itbi', function () {
        return view('contribuinte.itbi');
    })->name('contribuinte.itbi');
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
    Route::get('/seminfra', [OrgaosController::class, 'seminfra'])->name('orgaos.seminfra');
    Route::get('/semma', [OrgaosController::class, 'semma'])->name('orgaos.semma');
    Route::get('/pgm', [OrgaosController::class, 'pgm'])->name('orgaos.pgm');
    Route::get('/sms', [OrgaosController::class, 'sms'])->name('orgaos.sms');
    Route::get('/semsurb', [OrgaosController::class, 'semsurb'])->name('orgaos.semsurb');
    Route::get('/fumctur', [OrgaosController::class, 'fumctur'])->name('orgaos.fumctur');
    Route::get('/saae', [OrgaosController::class, 'saae'])->name('orgaos.saae');
    Route::get('/smtt', [OrgaosController::class, 'smtt'])->name('orgaos.smtt');
});

Route::group(['prefix' => 'conselhos'], function () {
    Route::get('/cmgt', [ConselhosController::class, 'cmgt'])->name('conselhos.cmgt');
    Route::get('/crafi', [ConselhosController::class, 'crafi'])->name('conselhos.crafi');
});

Route::group(['prefix' => 'banners'], function () {
    Route::get('/', [BannersController::class, 'index'])->name('banners');
    Route::get('/governanca-publica', [BannersController::class, 'governancapublica'])->name('banners.governancapublica');
    Route::get('/conselho-municipal-gestao-territorial', [BannersController::class, 'conselhomunicipalgestaoterritorial'])->name('banners.conselhomunicipalgestaoterritorial');
});
