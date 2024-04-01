<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class HomeController extends Controller
{
    public function home() {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/ultimas');
        $noticiasRecentesGabinete = $apiController->getApi('noticias/categorias/ultimas/gabinete');
        $noticiasRecentesSaude = $apiController->getApi('noticias/categorias/ultimas/saude');
        $noticiasRecentesCultura = $apiController->getApi('noticias/categorias/ultimas/cultura');
        $noticiasRecentesInfraestrutura = $apiController->getApi('noticias/categorias/ultimas/infraestrutura');

        return view('index', compact('noticiasRecentes', 'noticiasRecentesGabinete', 'noticiasRecentesSaude', 'noticiasRecentesCultura', 'noticiasRecentesInfraestrutura'));
    }
}
