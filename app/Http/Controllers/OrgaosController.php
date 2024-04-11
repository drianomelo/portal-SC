<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrgaosController extends Controller
{
    public function semas()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/assistencia');
        return view('orgaos.semas', compact('noticiasRecentes'));
    }

    public function cgm()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/controladoria');
        return view('orgaos.cgm', compact('noticiasRecentes'));
    }

    public function semdes()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/transito');
        return view('orgaos.semdes', compact('noticiasRecentes'));
    }

    public function semdet()
    {
        return view('orgaos.semdet');
    }

    public function semed()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/educacao');
        return view('orgaos.semed', compact('noticiasRecentes'));
    }

    public function semel()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/esporte');
        return view('orgaos.semel', compact('noticiasRecentes'));
    }

    public function semfop()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/fazenda');
        return view('orgaos.semfop', compact('noticiasRecentes'));
    }

    public function gapre()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/gabinete');
        return view('orgaos.gapre', compact('noticiasRecentes'));
    }

    public function gabvp()
    {
        return view('orgaos.gabvp');
    }

    public function segov()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/governo');
        return view('orgaos.segov', compact('noticiasRecentes'));
    }

    public function seminfra()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/infraestrutura');
        return view('orgaos.seminfra', compact('noticiasRecentes'));
    }

    public function semma()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/meio-ambiente');
        return view('orgaos.semma', compact('noticiasRecentes'));
    }
    public function pgm()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/procuradoria');
        return view('orgaos.pgm', compact('noticiasRecentes'));
    }

    public function sms()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/saude');
        return view('orgaos.sms', compact('noticiasRecentes'));
    }

    public function semsurb()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/servicos-urbanos');
        return view('orgaos.semsurb', compact('noticiasRecentes'));
    }

    public function fumctur()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/cultura');
        return view('orgaos.fumctur', compact('noticiasRecentes'));
    }

    public function saae()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/saae');
        return view('orgaos.saae', compact('noticiasRecentes'));
    }

    public function smtt()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/transito');
        return view('orgaos.smtt', compact('noticiasRecentes'));
    }
}
