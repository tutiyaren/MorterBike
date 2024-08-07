<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scenery_Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre'
    ];

    // Scenery_Postリレーション
    public function scenery_posts()
    {
        return $this->hasMany(Scenery_Post::class, 'genre_id');
    }

    protected $table = 'scenery_genres';
}
