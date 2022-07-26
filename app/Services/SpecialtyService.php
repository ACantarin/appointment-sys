<?php

namespace App\Services;

use App\Models\Specialty;

class SpecialtyService {

    public function getAll() {
        return Specialty::all();
    }

    public function store(array $request) {
        $specialty = $this->buildSpecialty($request);
        Specialty::create($specialty);
    }

    public static function get(int $id) {
        return Specialty::find($id);
    }

    private function buildSpecialty(array $request) {
        $specialty = [];
        $specialty["name"] = $request["name"];

        return $specialty;
    }
}