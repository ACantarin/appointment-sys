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
        if ($value > 18) return true;

        if ($this->legalResponsibleDocument !== "") return true;

        return false;
    }

    public function message() {
        return "Pacientes menores de idade devem ter um responsável legal";
    }
}
