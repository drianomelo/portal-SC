<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class NoticiaController extends Controller
{
    public function post($slug)
    {
        $apiController = new ApiController();
        $noticiaEspecifica = $apiController->getApi('noticias/' . $slug);

        return view('noticia.post', compact('noticiaEspecifica'));
    }
}
