<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrgaosController extends Controller
{
    public function semas()
    {
        return view('orgaos.semas');
    }

    public function cgm()
    {
        return view('orgaos.cgm');
    }
}
