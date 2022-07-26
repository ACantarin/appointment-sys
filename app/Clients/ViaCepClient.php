<?php

namespace App\Clients;

use Illuminate\Support\Facades\Http;

class ViaCepClient {

    private string $baseUrl = "https://viacep.com.br/ws";

    private int $httpOkStatusCode = 200;

    public function getAddressByZipCode(string $zipCode) {
        $response = Http::get($this->baseUrl . "/" . $zipCode . "/json");

        if ($response->getStatusCode() !== $this->httpOkStatusCode) throw new \Exception("O CEP informado é inválido");   

        $responseBody = $response->body();     

        return json_decode($responseBody, true);
    }
}