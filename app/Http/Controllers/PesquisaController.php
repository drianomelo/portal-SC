<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class PesquisaController extends Controller
{
    public function pesquisa($input) {
        // $apiController = new ApiController();
        // $noticiaEspecifica = $apiController->getApi('noticias/' . $input);

        // return view('pesquisa.index', compact('noticiaEspecifica'));
        return view('pesquisa.index', compact('input'));
    }
}
