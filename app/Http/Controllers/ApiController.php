<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client as Client;
use GuzzleHttp\Exception\ClientException;


class ApiController extends Controller
{
    public function apiYoutubeGet($channelId){
        $apiKey = 'AIzaSyDhAuJU7f8c8hiW1nGLle8YlKOqkJ1MqSY';
        $maxResults = 40;
        $client = new Client();

        $response = $client->get("https://www.googleapis.com/youtube/v3/search?part=snippet&channelId={$channelId}&maxResults={$maxResults}&order=date&type=video&key={$apiKey}");
        $data = json_decode($response->getBody()->getContents(), true);

        return $data['items'];
    }
}
