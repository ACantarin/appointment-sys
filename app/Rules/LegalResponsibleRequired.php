<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class LegalResponsibleRequired implements Rule
{
    private int $legalResponsibleId;

    public function __construct(Request $request) {
        $request = $request->all();
        $this->legalResponsibleId = $request["legal_responsible_id"] ?? 0;
    }

    public function passes($attribute, $value) {
        return $value > 18 || $this->legalResponsibleId > 0;
    }

    public function message() {
        return "Pacientes menores de idade devem ter um responsável legal";
    }
}
