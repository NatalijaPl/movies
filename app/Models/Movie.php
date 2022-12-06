<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'genre', 'director', 'year', 'storyline'];

    // const STORE_RULES = [
    //     'title' => 'required',
    //     'genre' => 'required',
    //     'director' => 'max: 25',
    //     'year' => 'integer | between: 1900, $year',
    //     'storyline' => 'max: 1000'
    // ];
    public static function published()
    {
        return self::where('published', 1)->get();
    }
}
