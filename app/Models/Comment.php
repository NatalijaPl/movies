<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    const STORE_RULES = [
        'content' => 'required'
    ];
}