<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $fillable = [
        "name",
        "subcounty_id",
    ];
    public function subcounty() {
        return $this->belongsTo(SubCounty::class);
    }

    public function locations() {
        return $this->hasMany(Location::class);
    }
}
