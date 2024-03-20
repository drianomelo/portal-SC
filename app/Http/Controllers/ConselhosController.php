<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConselhosController extends Controller
{
    public function cmgt() {
        return view('conselhos.cmgt');
    }

    public function crafi() {
        return view('conselhos.crafi');
    }
}
