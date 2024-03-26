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
}
