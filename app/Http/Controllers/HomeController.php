<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class HomeController extends Controller
{
    protected $apiController;
    public function __construct(ApiController $apiController)
    {
        $this->apiController = $apiController;
    }
    public function index(){

        // $channelId = 'UCRxSvC9upW2HOAg9zmf2vrg';
        // $videos = $this->apiController->apiYoutubeGet($channelId);

        // return view('layouts.main', compact('videos'));
        return view('components.layout.main');
    }
}
