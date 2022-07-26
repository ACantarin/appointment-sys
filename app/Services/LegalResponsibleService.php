<?php

namespace App\Services;

use App\Models\LegalResponsible;

class LegalResponsibleService {

    public function store(array $request) {
        $legalResponsible = $this->buildLegalResponsible($request);
        LegalResponsible::create($legalResponsible);
    }

    public static function get(int $id) {
        return LegalResponsible::find($id);
    }

    private function buildLegalResponsible(array $request) {
        $legalResponsible = [];
        $legalResponsible["name"] = $request["name"];
        $legalResponsible["document"] = $request["document"];
        $legalResponsible["age"] = $request["age"];

        return $legalResponsible;
    }
}