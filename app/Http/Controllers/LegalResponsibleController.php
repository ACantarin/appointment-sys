<?php

namespace App\Http\Controllers;

use App\Http\Validators\LegalResponsibleValidator;
use App\Services\LegalResponsibleService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LegalResponsibleController extends Controller {
    
    public function store(Request $request) {
        try {
            DB::beginTransaction();

            LegalResponsibleValidator::validateStore($request);

            $request = $request->all();
    
            $legalResponsibleService = new LegalResponsibleService();
            $legalResponsibleService->store($request);

            DB::commit();

            return json_encode(["success" => true, "data" => "Responsável salvo com sucesso"]);
        } catch (\Exception $exception) {
            DB::rollBack();
            return json_encode(["success" => false, "message" => $exception->getMessage()]);
        }
    }
}
