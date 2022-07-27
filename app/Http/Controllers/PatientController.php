<?php

namespace App\Http\Controllers;

use App\Http\Validators\PatientValidator;
use App\Services\PatientService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller {

    public function add() {
        return view("patient.add");
    }
    
    public function index() {
        $patientService = new PatientService();
        $patients = $patientService->getAll();
        $patients = $patients->all();
        
        return view("patient.index", compact("patients"));
    }

    public function store(Request $request) {
        try {
            DB::beginTransaction();

            PatientValidator::validateStore($request);

            $request = $request->all();
    
            $patientService = new PatientService();
            $patientService->store($request);

            DB::commit();

            return json_encode(["success" => true, "data" => "Paciente salvo com sucesso"]);
        } catch (\Exception $exception) {
            DB::rollBack();
            return json_encode(["success" => false, "message" => $exception->getMessage()]);
        }
    }
}
