<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model {

    protected $fillable = [
        "date"
    ];

    public function patient() {
        return $this->hasOne(Patient::class);
    }

    public function doctor() {
        return $this->hasOne(Doctor::class);
    }
}