<?php

namespace App\Http\Controllers;

use App\Http\Validators\PatientValidator;
use App\Services\PatientService;
use Illuminate\Http\Request;

class PatientController extends Controller {
    
    public function index() {
        $patientService = new PatientService();
        $patients = $patientService->getAll();
        $patients = $patients->all();
        
        return view("patient.index", compact("patients"));
    }

    public function store(Request $request) {
        try {
            PatientValidator::validateStore($request);

            $request = $request->all();
    
            $patientService = new PatientService();
            $patientService->store($request);

            return json_encode(["success" => true, "data" => "Paciente salvo com sucesso"]);
        } catch (\Exception $exception) {
            return json_encode(["success" => false, "message" => $exception->getMessage()]);
        }
    }
}
