<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client as Client;

// require 'vendor/autoload.php';
class ApiController extends Controller
{
    public function getToken() {
        $loginUrl = 'http://10.36.14.99:8000/api/auth/login';
        $client = new Client(['verify' => 'storage/cacert.pem']);

        // Se o token já existe na sessão, retorna ele
        if (session()->has('token')) {
            return session('token');
        }

        // Caso contrário, obtém um novo token
        $response = $client->request('POST', $loginUrl, [
            'form_params' => [
                'email' => 'admin@blog.com',
                'password' => 'Diti@N2023',
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        $token = $data['token'];

        // Armazena o novo token na sessão
        session(['token' => $token]);


        return $token;
    }

    public function getApi($endpoint) {
        $apiUrl = 'http://10.36.14.99:8000/api/' . $endpoint;
        $token = $this->getToken();
        $client = new Client(['verify' => 'storage/cacert.pem']);

        try {
            $response = $client->request('GET', $apiUrl, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json',
                ],
            ]);

            $statusCode = $response->getStatusCode();

            // Se o status for 401 (Não Autorizado), remove o token da sessão, obtém um novo e repete a requisição
            if ($statusCode == 401) {
                session()->forget('token');
                $token = $this->getToken();
                $response = $client->request('GET', $apiUrl, [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $token,
                        'Accept' => 'application/json',
                    ],
                ]);
                $statusCode = $response->getStatusCode();
            }

            $dados = json_decode($response->getBody(), true);

            return $dados;
        } catch (\Exception $e) {
            // Trate a exceção aqui, por exemplo, registre-a ou lance uma nova exceção personalizada
            Log::error('Erro ao fazer a requisição da API: ' . $e->getMessage());
            throw new \Exception('Erro ao fazer a requisição da API', 500);
        }

    }
}



