<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function saocristovao()
    {
        return view('municipio.saocristovao');
    }

    public function prefeito()
    {
        return view('municipio.prefeito');
    }

    public function viceprefeito()
    {
        return view('municipio.viceprefeito');
    }

    public function prefeitura()
    {
        return view('municipio.prefeitura');
    }
}
