<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model {

    protected $fillable = [
        "name", "document", "age", "email", "zip_code", "address", "address_number", "legal_responsible_name", "legal_responsible_document"
    ];

    public function phones() {
        return $this->hasMany(Phone::class);
    }
}