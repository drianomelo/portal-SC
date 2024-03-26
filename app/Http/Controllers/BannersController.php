<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannersController extends Controller
{
    public function index() {
        return view('banners.index');
    }
    public function governancapublica() {
        return view('banners.governanca-publica');
    }
    public function conselhomunicipalgestaoterritorial() {
        return view('banners.conselho-municipal-gestao-territorial');
    }
    public function concursoseselecoes() {
        return view('banners.concursos-selecoes');
    }
    public function concursos() {
        return view('banners.concursos');
    }
    public function concursoguardaeoutros() {
        return view('banners.concurso-guarda-outros');
    }
    public function concursoagentecomunitario() {
        return view('banners.concurso-agente-comunitario');
    }
    public function concursosemed2019() {
        return view('banners.concurso-semed-2019');
    }
    public function pss() {
        return view('banners.pss');
    }
    public function psssemed2023() {
        return view('banners.pss-semed-2023');
    }
    public function pssmotorista() {
        return view('banners.pss-motorista');
    }
    public function psssaude() {
        return view('banners.pss-saude');
    }
    public function psssemed2021() {
        return view('banners.pss-semed-2021');
    }
    public function pssassistenciasocial() {
        return view('banners.pss-assistencia-social');
    }
    public function pssbolsistas() {
        return view('banners.pss-bolsistas');
    }
}
