<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $fillable = [
        "name",
        "country_id",
    ];

    public function country() {
        return $this->belongsTo(Country::class);
    }

    public function subcounty() {
        return $this->hasMany(SubCounty::class);
    }
}
