<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Models\PaginaInterna;

class PesquisaController extends Controller
{

    public function pesquisa($input) {
        $apiController = new ApiController();
        $noticiasFiltradas = $apiController->getApi('noticias/input/' . $input);
        $quantidadeNoticias = count($noticiasFiltradas);

        $paginasInternas = array(
            new PaginaInterna("/municipio/saocristovao", "Município - São Cristóvão", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/saocristovao.jpg", 'municipio'),
            new PaginaInterna("/municipio/prefeito", "Município - O Prefeito", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/prefeito.jpeg", 'municipio'),
            new PaginaInterna("/municipio/vici-prefeito", "Município - O Vice-Prefeito", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/prefeito.jpeg", 'municipio'),
            new PaginaInterna("/municipio/prefeitura", "Município - Prefeitura", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/prefeitura.jpg", 'municipio'),
            new PaginaInterna("/orgaos/semas", "Órgãos - Secretaria Municipal da Assistência Social - semas", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/semas.png", 'orgao'),
        );

        $paginasInternasFiltradas = array_filter($paginasInternas, function($pagina) use ($input) {
            return str_contains(strtolower($pagina->titulo), strtolower($input));
        });

        $resultadoPesquisa = $quantidadeNoticias + count($paginasInternasFiltradas);

        return view('pesquisa.index', compact('noticiasFiltradas','paginasInternasFiltradas', 'resultadoPesquisa', 'input', 'mensagemErro'));
    }
}
