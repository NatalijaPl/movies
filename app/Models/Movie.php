<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public static function published()
    {
        return self::where('published', 1)->get();
    }

    protected $fillable = ['title', 'genre', 'director', 'year', 'storyline'];

    public $timestamps = false;
}
