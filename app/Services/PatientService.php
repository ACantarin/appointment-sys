<?php

namespace App\Services;

use App\Models\Patient;

class PatientService {

    public function getAll() {
        return Patient::all();
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

        if ($request["legal_responsible_id"]) {
            $legalResponsible = LegalResponsibleService::get($request["legal_responsible_id"]);
            if (!$legalResponsible) throw new \Exception("O responsável informado é inválido");

            $patient["legal_responsible_id"] = $legalResponsible->id;
        }

        return $patient;
    }
}