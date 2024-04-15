<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class NoticiaController extends Controller
{
    public function todasNoticias() {
        $apiController = new ApiController();
        $noticias = $apiController->getApi('noticias');

        return view('noticias.index', compact('noticias'));
    }

    public function noticia($slug)
    {
        $apiController = new ApiController();
        $noticiaEspecifica = $apiController->getApi('noticias/' . $slug);
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/' . $noticiaEspecifica[0]['categorias'][0]);

        return view('noticias.noticia', compact('noticiaEspecifica', 'noticiasRecentes'));
    }

    public function noticiasPorCategoria($categoria) {
        $apiController = new ApiController();
        $noticias = $apiController->getApi('noticias/categoria/' . $categoria);

        return view('noticias.noticiasPorCategoria', compact('noticias'));
    }
}
