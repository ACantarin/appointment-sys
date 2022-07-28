<?php

namespace App\Services;

use App\Models\Patient;

class PatientService {

    public function getAll() {
        return Patient::all();
    }

    public function getPatientByDocument(string $document) {
        return Patient::where("document", $document)->get();
    }

    public function store(array $request) {
        $patient = $this->buildPatient($request);
        Patient::create($patient);
    }

    private function buildPatient(array $request) {
        $patient = [];
        $patient["name"] = $request["name"];
        $patient["document"] = $request["document"];
        $patient["age"] = $request["age"];
        $patient["email"] = $request["email"];
        $patient["zip_code"] = $request["zip_code"];
        $patient["address"] = $request["address"];
        $patient["address_number"] = $request["address_number"];
        $patient["legal_responsible_name"] = $request["legal_responsible_name"] ?? null;
        $patient["legal_responsible_document"] = $request["legal_responsible_document"] ?? null;

        return $patient;
    }
}