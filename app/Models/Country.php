<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        "name"
    ];

    public function county() {
        return $this->hasMany(County::class);
    }
}
