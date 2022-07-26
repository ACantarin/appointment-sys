<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model {

    protected $fillable = [
        "number", "patient_id"
    ];

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}