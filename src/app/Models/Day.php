<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    protected $fillable = [
        'day'
    ];

    // Touringリレーション
    public function touring()
    {
        return $this->hasOne(Touring::class, 'day_id');
    }
}
