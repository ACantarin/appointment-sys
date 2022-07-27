<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model {

    protected $fillable = [
        "date", "patient_id", "doctor_id"
    ];

    public function patient() {
        return Patient::find($this->patient_id);
    }

    public function doctor() {
        return Doctor::find($this->doctor_id);
    }
}