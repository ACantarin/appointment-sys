<?php

namespace App\Http\Controllers;

use App\Http\Validators\LegalResponsibleValidator;
use App\Services\LegalResponsibleService;
use Illuminate\Http\Request;

class LegalResponsibleController extends Controller {
    
    public function store(Request $request) {
        try {
            LegalResponsibleValidator::validateStore($request);

            $request = $request->all();
    
            $legalResponsibleService = new LegalResponsibleService();
            $legalResponsibleService->store($request);

            return json_encode(["success" => true, "data" => "Responsável salvo com sucesso"]);
        } catch (\Exception $exception) {
            return json_encode(["success" => false, "message" => $exception->getMessage()]);
        }
    }
}
