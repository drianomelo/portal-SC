<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicacaoController extends Controller
{
    public function post()
    {
        return view('publicacao.post');
    }
}
