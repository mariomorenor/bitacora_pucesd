<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getFullNameAttribute()
    {
        return $this->name . " " . $this->last_name;
    }

    public function setNameAttribute($value)
    {
        $this->attributes["name"] = strtoupper($value);
    }

    public function setLastNameAttribute($value)
    {
        $this->attributes["last_name"] = strtoupper($value);
    }
}
