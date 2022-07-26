<?php

namespace App\Http\Validators;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LegalResponsibleValidator {

    public static function validateStore(Request $request) {
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "document" => "required|unique:App\Models\LegalResponsible,document",
            "age" => "required|gt:18"
        ], self::messages());

        if ($validator->fails()) {
            dd($validator->getMessageBag());
        }
    }

    private function messages() {
        return [
            'name.required' => "Informar o nome do responsável",
            'document.required' => "Informar o CPF do responsável",
            'document.unique' => "O CPF informado já existe na base",
            'age.required' => "Informar a idade do responsável",
            'age.gt' => "A idade do responsável deve ser maior que 18 anos",
        ];
    }
}