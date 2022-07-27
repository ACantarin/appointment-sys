<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class LegalResponsibleRequired implements Rule {

    private string $legalResponsibleDocument;

    public function __construct(Request $request) {
        $request = $request->all();
        $this->legalResponsibleDocument = $request["legal_responsible_document"] ?? "";
    }

    public function passes($attribute, $value) {
        return $value > 18 || $this->legalResponsibleDocument !== "";
    }

    public function message() {
        return "Pacientes menores de idade devem ter um responsável legal";
    }
}
