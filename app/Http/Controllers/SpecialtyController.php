<?php

namespace App\Http\Controllers;

use App\Http\Validators\SpecialtyValidator;
use App\Services\SpecialtyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpecialtyController extends Controller {

    public function add() {
        return view("specialty.add");
    }

    public function store(Request $request) {
        try {
            DB::beginTransaction();

            SpecialtyValidator::validateStore($request);

            $request = $request->all();

            $specialtyService = new SpecialtyService();
            $specialtyService->store($request);

            DB::commit();

            return redirect("specialties")->with("alert", "Especialidade salva com sucesso");
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect("specialties")->with("alert", $exception->getMessage());
        }
    }

    public function index() {
        $specialtyService = new SpecialtyService();
        $specialties = $specialtyService->getAll();
        $specialties = $specialties->all();

        return view("specialty.index", compact("specialties"));
    }
}
