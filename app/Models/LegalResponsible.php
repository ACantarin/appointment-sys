<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegalResponsible extends Model
{
    protected $fillable = [
        "name", "document", "age"
    ];
}
