<?php

namespace App\Http\Validators;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DoctorValidator {

    public static function validateStore(Request $request) {
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "register_number" => "required|unique:App\Models\Doctor,register_number",
            "specialty_id" => "required",
        ], self::messages());

        if ($validator->fails()) throw new \Exception($validator->getMessageBag()->first());
    }

    private function messages() {
        return [
            'name.required' => "Informar o nome do médico",
            'register_number.required' => "Informar o CRM do médico",
            'register_number.unique' => "O CRM informado já existe na base",
            'specialty_id.required' => "Informar a especialidade do médico"
        ];
    }
}