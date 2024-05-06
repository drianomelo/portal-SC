<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\OrgaosController;
use App\Http\Controllers\ConselhosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ErrorsController;
use App\Http\Controllers\PesquisaController;

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

Route::get('/', [HomeController::class, 'home'])->name('index');

Route::get('/ouvidoria', function () {
    return view('ouvidoria.index');
})->name('ouvidoria');

Route::get('/cep/{endereco?}', function () {
    return view('cep.index');
})->name('cep');

Route::group(['prefix' => 'municipio'], function () {
    Route::get('/saocristovao', [MunicipioController::class, 'saocristovao'])->name('municipio.saocristovao');
    Route::get('/prefeito', [MunicipioController::class, 'prefeito'])->name('municipio.prefeito');
    Route::get('/vice-prefeito', [MunicipioController::class, 'viceprefeito'])->name('municipio.viceprefeito');
    Route::get('/prefeitura', [MunicipioController::class, 'prefeitura'])->name('municipio.prefeitura');
});

Route::group(['prefix' => 'contribuinte'], function () {
    Route::get('/itbi', function () {
        return view('contribuinte.itbi');
    })->name('contribuinte.itbi');
    Route::get('/ufm', function () {
        return view('contribuinte.ufm');
    })->name('contribuinte.ufm');
    Route::get('/reemissao-de-iptu', function () {
        return view('contribuinte.reemissao-de-iptu');
    })->name('contribuinte.reemissao-de-iptu');
    Route::get('/transacao', function () {
        return view('contribuinte.transacao');
    })->name('contribuinte.transacao');
    Route::get('/requerimentos', function () {
        return view('contribuinte.requerimentos');
    })->name('contribuinte.requerimentos');
    Route::get('/certidoes', function () {
        return view('contribuinte.certidoes');
    })->name('contribuinte.certidoes');
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
    Route::get('/consema', [ConselhosController::class, 'consema'])->name('conselhos.consema');
});

Route::group(['prefix' => 'banners'], function () {
    Route::get('/', [BannersController::class, 'index'])->name('banners');
    Route::get('/governanca-publica', [BannersController::class, 'governancapublica'])->name('banners.governancapublica');
    Route::get('/conselho-municipal-gestao-territorial', [BannersController::class, 'conselhomunicipalgestaoterritorial'])->name('banners.conselhomunicipalgestaoterritorial');
    Route::get('/concursos-selecoes', [BannersController::class, 'concursoseselecoes'])->name('banners.concursoseselecoes');
    Route::get('/concursos-selecoes/concursos', [BannersController::class, 'concursos'])->name('banners.concursoseselecoes.concursos');
    Route::get('/concursos-selecoes/concursos/guarda-e-outras-areas', [BannersController::class, 'concursoguardaeoutros'])->name('banners.concursoseselecoes.concursos.guarda');
    Route::get('/concursos-selecoes/concursos/agente-comunitario', [BannersController::class, 'concursoagentecomunitario'])->name('banners.concursoseselecoes.concursos.agentecomunitario');
    Route::get('/concursos-selecoes/concursos/semed-2019', [BannersController::class, 'concursosemed2019'])->name('banners.concursoseselecoes.concursos.semed2019');
    Route::get('/concursos-selecoes/pss', [BannersController::class, 'pss'])->name('banners.concursoseselecoes.pss');
    Route::get('/concursos-selecoes/pss/semed-2023', [BannersController::class, 'psssemed2023'])->name('banners.concursoseselecoes.pss.semed2023');
    Route::get('/concursos-selecoes/pss/motorista', [BannersController::class, 'pssmotorista'])->name('banners.concursoseselecoes.pss.motorista');
    Route::get('/concursos-selecoes/pss/saude', [BannersController::class, 'psssaude'])->name('banners.concursoseselecoes.pss.saude');
    Route::get('/concursos-selecoes/pss/semed-2021', [BannersController::class, 'psssemed2021'])->name('banners.concursoseselecoes.pss.semed2021');
    Route::get('/concursos-selecoes/pss/assistencia-social', [BannersController::class, 'pssassistenciasocial'])->name('banners.concursoseselecoes.pss.assistenciasocial');
    Route::get('/concursos-selecoes/pss/bolsistas', [BannersController::class, 'pssbolsistas'])->name('banners.concursoseselecoes.pss.bolsistas');
    Route::get('/lei-paulo-gustavo', [BannersController::class, 'leipaulogustavo'])->name('banners.leipaulogustavo');
    Route::get('/credenciamento-profissionais-cultura', [BannersController::class, 'credenciamentoprofissionaiscultura'])->name('banners.credenciamentoprofissionaiscultura');
    Route::get('/sala-do-empreendedor', [BannersController::class, 'saladoempreendedor'])->name('banners.saladoempreendedor');
    Route::get('/edital-OSC', [BannersController::class, 'editalosc'])->name('banners.editalosc');
    Route::get('/estagio', [BannersController::class, 'estagio'])->name('banners.estagio');
    Route::get('/chamada-publica-paa', [BannersController::class, 'paa'])->name('banners.paa');
    Route::get('/hino-municipal', [BannersController::class, 'hino'])->name('banners.hino');
    Route::get('/guarda-pet', [BannersController::class, 'guardapet'])->name('banners.guardapet');
    Route::get('/guarda-pet/castra-pet', [BannersController::class, 'castrapet'])->name('banners.castrapet');
    Route::get('/projeto-reconhecendo', [BannersController::class, 'projetoreconhecendo'])->name('banners.projetoreconhecendo');
    Route::get('/loa-ppa', [BannersController::class, 'loappa'])->name('banners.loappa');
    Route::get('/seminario-boas-praticas', [BannersController::class, 'seminario'])->name('banners.seminario');
    Route::get('/plano-municipal-saude', [BannersController::class, 'planomunicipalsaude'])->name('banners.planomunicipalsaude');
});

Route::group(['prefix' => 'noticias'], function () {
    Route::get('/', [NoticiaController::class, 'todasNoticias'])->name('todasNoticias');
    Route::get('/{slug}', [NoticiaController::class, 'noticia'])->name('noticia');
    Route::get('/todas/{categoria}', [NoticiaController::class, 'noticiasPorCategoria'])->name('noticiasPorCategoria');
});

Route::get('/pesquisa/{input}', [PesquisaController::class, 'pesquisa'])->name('pesquisa');

Route::get('/acesso-rapido', function () {
    return view('acesso-rapido.index');
})->name('acesso-rapido');

Route::group(['prefix' => 'licencas'], function () {
    Route::get('/', function () {
        return view('acesso-rapido.licencas.index');
    })->name('licencas');
    Route::get('/semma', function () {
        return view('acesso-rapido.licencas.semma');
    })->name('licencas.semma');
    Route::get('/sms', function () {
        return view('acesso-rapido.licencas.sms');
    })->name('licencas.sms');
    Route::get('/seminfra', function () {
        return view('acesso-rapido.licencas.seminfra');
    })->name('licencas.seminfra');
});

Route::group(['prefix' => 'credenciamento'], function () {
    Route::get('/', function () {
        return view('acesso-rapido.credenciamento.index');
    })->name('credenciamento');
    Route::get('/meis', function () {
        return view('acesso-rapido.credenciamento.meis');
    })->name('credenciamento.meis');
    Route::get('/saude', function () {
        return view('acesso-rapido.credenciamento.saude');
    })->name('credenciamento.saude');
    Route::get('/recursos', function () {
        return view('acesso-rapido.credenciamento.recursos');
    })->name('credenciamento.recursos');
    Route::get('/festa-de-passos-2024', function () {
        return view('acesso-rapido.credenciamento.festa-de-passos-2024');
    })->name('credenciamento.festa-de-passos-2024');
});

Route::get('/planos-municipais', function () {
    return view('acesso-rapido.planos-municipais');
})->name('planos-municipais');

Route::get('/contracheque', function () {
    return view('contracheque.index');
})->name('contracheque');

Route::get('/mapa-do-site', function () {
    return view('mapa-do-site.index');
})->name('mapadosite');

Route::group(['prefix' => 'errors'], function () {
    Route::get('/504', [ErrorsController::class, 'error504'])->name('errors.504');
});
