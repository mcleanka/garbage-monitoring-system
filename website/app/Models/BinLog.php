<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinLog extends Model
{
    use HasFactory;

    protected $fillable = [
        "status",
        "bin_id",
        "percentage",
    ];

    public function bin()
    {
        return $this->belongsTo(Bin::class);
    }
}
