<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['brand'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function setDescriptionAttribute($value)
    {
        $this->attributes["description"] = strtoupper($value);
    }
}
