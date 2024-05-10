<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'website',
    ];

    protected $dates = ['published_at'];


    public function getRouteKeyName()
    {
        return 'slug';
    }
}
