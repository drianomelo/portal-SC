<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as Client;

class CepController extends Controller
{
    public function getToken() {
        $apiUrl = 'https://api.correios.com.br/token/v1/autentica/cartaopostagem';
        $client = new Client(['verify' => 'storage/cacert.pem']);

        $response = $client->request('POST', $apiUrl, [
            'json' => [
                'numero' => '0076870286'
            ],
            'headers' => [
                'Authorization' => 'Basic c2FvY3Jpc3RvdmFvcG06SHNwVEhZWVpaRW5XSEpRV0NlbE9Qa0Y4ZXlNSkNlanNxY2ZxQW52Yw==',
                'Content-Type' => 'application/json',
            ],
        ]);

        $dados = json_decode($response->getBody(), true);
        $token = $dados['token'];

        return $token;
    }

    public function getRuas(Request $request) {
        $endereco = $request->input('input-cep');
        $token = $this->getToken();
        $apiUrl = 'https://api.correios.com.br/cep/v2/enderecos?uf=SE&localidade=S%C3%A3o%20Crist%C3%B3v%C3%A3o&logradouro=' . $endereco .'&page=0&size=50';
        $client = new Client(['verify' => 'storage/cacert.pem']);

        try {
            $response = $client->request('GET', $apiUrl, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json',
                ],
            ]);
            $dados = json_decode($response->getBody(), true);
            $qntdDados = isset($dados['itens']) ? count($dados['itens']) : 0;

            return view('cep.index', compact('dados', 'qntdDados', 'endereco'));
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            if ($e->getResponse() && $e->getResponse()->getStatusCode() == 504) {
                return response()->view('errors.504', [], 504);
            }
            throw $e;
        }
    }

    public function getBairros(Request $request) {
        $endereco = $request->input('input-cep');
        $token = $this->getToken();
        $apiUrl = 'https://api.correios.com.br/cep/v2/enderecos?uf=SE&localidade=S%C3%A3o%20Crist%C3%B3v%C3%A3o&bairro=' . $endereco. '&page=0&size=50';
        $client = new Client(['verify' => 'storage/cacert.pem']);

        try {
            $response = $client->request('GET', $apiUrl, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json',
                ],
            ]);

            $dados = json_decode($response->getBody(), true);
            $qntdDados = count($dados['itens']);

            return view('cep.index', compact('dados', 'qntdDados', 'endereco'));
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            if ($e->getResponse() && $e->getResponse()->getStatusCode() == 504) {
                return response()->view('errors.504', [], 504);
            }

            throw $e;
        }
    }
}
