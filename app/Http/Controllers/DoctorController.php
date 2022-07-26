<?php

namespace App\Http\Controllers;

use App\Services\DoctorService;
use App\Http\Validators\DoctorValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller {
    
    public function index() {
        $doctorService = new DoctorService();
        $doctors = $doctorService->getAll();
        return view("doctor.index", compact("doctors"));
    }

    public function store(Request $request) {
        try {
            DB::beginTransaction();

            DoctorValidator::validateStore($request);

            $request = $request->all();
    
            $doctorService = new DoctorService();
            $doctorService->store($request);

            DB::commit();

            return json_encode(["success" => true, "data" => "Médico salvo com sucesso"]);
        } catch (\Exception $exception) {
            DB::rollBack();
            return json_encode(["success" => false, "message" => $exception->getMessage()]);
        }
    }
}
