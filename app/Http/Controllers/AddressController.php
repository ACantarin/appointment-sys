<?php

namespace App\Http\Controllers;

use App\Clients\ViaCepClient;
use Illuminate\Http\Request;

class AddressController extends Controller {
    
    public function show(Request $request) {
        try {
            $viaCepClient = new ViaCepClient();
            $addressData = $viaCepClient->getAddressByZipCode($request->zip_code);
    
            return json_encode(["success" => true, "data" => $addressData]);
        } catch (\Exception $exception) {
            return json_encode(["success" => false, "message" => $exception->getMessage()]);
        }
    }
}
