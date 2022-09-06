<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinLog extends Model
{
    use HasFactory;

    public function bin()
    {
        return $this->hasMany(Bin::class);
    }
}