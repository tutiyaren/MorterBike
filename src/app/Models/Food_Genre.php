<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre'
    ];

    // Food_Postリレーション
    public function food_posts()
    {
        return $this->hasMany(Food_Post::class, 'genre_id');
    }

    protected $table = 'food_genres';
}
