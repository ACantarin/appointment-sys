<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model {

    protected $fillable = [
        "name", "register_number", "specialty_id"
    ];

    public function specialty() {
        return Specialty::find($this->specialty_id);
    }
}