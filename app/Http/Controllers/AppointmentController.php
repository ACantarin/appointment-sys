<?php

namespace App\Http\Controllers;

use App\Services\AppointmentService;
use App\Services\DoctorService;
use App\Services\PatientService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller {

    public function add() {
        $patientService = new PatientService();
        $patients = $patientService->getAll();
        $patients = $patients->all();

        $doctorService = new DoctorService();
        $doctors = $doctorService->getAll();
        $doctors = $doctors->all();

        return view("appointment.add", compact("patients", "doctors"));
    }
    
    public function index() {
        $appointmentService = new AppointmentService();
        $appointments = $appointmentService->getAll();
        $appointments = $appointments->all();
        
        return view("appointment.index", compact("appointments"));
    }

    public function store(Request $request) {
        try {
            DB::beginTransaction();

            $request = $request->all();

            $appointmentService = new AppointmentService();
            $appointmentService->store($request);

            DB::commit();

            return redirect("appointments")->with("alert", "Consulta salva com sucesso");
        } catch (\Exception $exception) {
            DB::rollBack();
            return json_encode(["success" => false, "message" => $exception->getMessage()]);
        }
    }
}
