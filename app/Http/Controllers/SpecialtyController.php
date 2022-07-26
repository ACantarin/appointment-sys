<?php

namespace App\Http\Controllers;

use App\Http\Validators\SpecialtyValidator;
use App\Services\SpecialtyService;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    public function add() {
        return view("specialty.add");
    }

    public function store(Request $request) {
        try {
            SpecialtyValidator::validateStore($request);

            $request = $request->all();

            $specialtyService = new SpecialtyService();
            $specialtyService->store($request);

            return json_encode(["success" => true, "data" => "Especialidade salva com sucesso"]);
        } catch (\Exception $exception) {
            return json_encode(["success" => false, "message" => $exception->getMessage()]);
        }
    }

    public function index() {
        $specialtyService = new SpecialtyService();
        $specialties = $specialtyService->getAll();
        $specialties = $specialties->all();

        return view("specialty.index", compact("specialties"));
    }
}
