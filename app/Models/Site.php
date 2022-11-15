<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ["parent"];

    public function parent()
    {
        return $this->belongsTo(Site::class, 'parent_id');
    }
}
