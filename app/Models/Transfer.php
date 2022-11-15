<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    protected $guarded = ["assets"];

    protected $with = ["source_responsible.site", "target_responsible.site"];

    public function source_responsible()
    {
        return $this->belongsTo(User::class, "source_responsible_id");
    }

    public function target_responsible()
    {
        return $this->belongsTo(User::class, "target_responsible_id");
    }

    public function transfer_type()
    {
        return $this->belongsTo(TransferType::class);
    }

    public function assets()
    {
        return $this->belongsToMany(Asset::class, "transfer_assets");
    }

    public function site_from()
    {
        return $this->belongsTo(Site::class, "site_from_id");
    }

    public function site_to()
    {
        return $this->belongsTo(Site::class, "site_to_id");
    }
}
