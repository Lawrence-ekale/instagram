<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    protected $fillable = [
        "name",
        "ward_id",
    ];
    public function ward() {
        return $this->belongsTo(Ward::class);
    }
}
