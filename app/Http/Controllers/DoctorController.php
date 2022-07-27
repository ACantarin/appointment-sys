<?php

namespace App\Http\Controllers;

use App\Http\Validators\DoctorValidator;
use App\Services\DoctorService;
use App\Services\SpecialtyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller {

    public function add() {
        $specialtyService = new SpecialtyService();
        $specialties = $specialtyService->getAll();
        $specialties = $specialties->all();

        return view("doctor.add", compact("specialties"));
    }
    
    public function index() {
        $doctorService = new DoctorService();
        $doctors = $doctorService->getAll();
        $doctors = $doctors->all();
        
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
