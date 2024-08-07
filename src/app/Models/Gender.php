<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $fillable = [
        'gender'
    ];

    // Profileリレーション
    public function profile()
    {
        return $this->hasOne(Profile::class, 'gender_id');
    }
}
