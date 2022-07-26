<?php

namespace App\Http\Validators;

use App\Rules\LegalResponsibleRequired;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PatientValidator {

    public static function validateStore(Request $request) {
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "document" => "required|unique:App\Models\Patient,document",
            "phone" => "required",
            "email" => "required",
            "zip_code" => "required",
            "address" => "required",
            "age" => ["required", new LegalResponsibleRequired($request)]
        ], self::messages());

        if ($validator->fails()) {
            dd($validator->getMessageBag());
        }
    }

    private function messages() {
        return [
            'name.required' => "Informar o nome do paciente",
            'document.required' => "Informar o CPF do paciente",
            'document.unique' => "O CPF informado já existe na base",
            'phone.required' => "Informar o telefone do paciente",
            'email.required' => "Informar o e-mail do paciente",
            'zip_code.required' => "Informar o CEP do paciente",
            'address.required' => "Informar o endereço do paciente",
            'age.required' => "Informar a idade do paciente"
        ];
    }
}