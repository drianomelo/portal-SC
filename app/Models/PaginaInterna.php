<?php

namespace App\Models;

class PaginaInterna {
    public $url;
    public $titulo;
    public $img;
    public $tipo;

    public function __construct($url, $titulo, $img, $tipo) {
        $this->url = $url;
        $this->titulo = $titulo;
        $this->img = $img;
        $this->tipo = $tipo;
    }
}
