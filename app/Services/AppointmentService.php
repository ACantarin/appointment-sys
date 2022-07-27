<?php

namespace App\Services;

use App\Models\Appointment;

class AppointmentService {

    public function getAll() {
        return Appointment::all();
    }

    public function store(array $request) {
        $appointment = $this->buildAppointment($request);
        Appointment::create($appointment);
    }

    private function buildAppointment(array $request) {
        $appointment = [];
        $appointment["date"] = $request["date"];
        $appointment["patient_id"] = $request["patient_id"];
        $appointment["doctor_id"] = $request["doctor_id"];

        return $appointment;
    }
}