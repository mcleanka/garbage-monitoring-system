<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bin extends Model
{
    use HasFactory;

    public function level()
    {
        return $this->hasMany(BinLog::class, 'bin_id', 'id')->latest();
    }
}
