<?php

namespace App\Services;

use App\Models\Doctor;
use App\Services\SpecialtyService;

class DoctorService {

    public function getAll() {
        return Doctor::all();
    }

    public function store(array $request) {
        $doctor = $this->buildDoctor($request);
        Doctor::create($doctor);
    }

    private function buildDoctor(array $request) {
        $doctor = [];
        $doctor["name"] = $request["name"];
        $doctor["register_number"] = $request["register_number"];
        $doctor["specialty_id"] = $this->getSpecialtyById($request["specialty_id"]);

        return $doctor;
    }

    private function getSpecialtyById(int $specialtyId) {
        $specialty = SpecialtyService::get($specialtyId);
        if (!$specialty) throw new \Exception("A especialidade informada é inválida");

       return $specialty->id;
    }
}