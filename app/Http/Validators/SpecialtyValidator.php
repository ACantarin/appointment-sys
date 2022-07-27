<?php

namespace App\Http\Validators;

use App\Rules\LegalResponsibleRequired;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SpecialtyValidator {

    public static function validateStore(Request $request) {
        $validator = Validator::make($request->all(), [
            "name" => "required"
        ], self::messages());

        if ($validator->fails()) throw new \Exception($validator->getMessageBag()->first());
    }

    private function messages() {
        return [
            'name.required' => "Informar o nome da especialidade"
        ];
    }
}