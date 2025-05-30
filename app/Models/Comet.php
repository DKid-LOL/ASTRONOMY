<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comet extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'image',
        'description',
        'discovery_date',
        'period',
        'last_perihelion',
        'next_perihelion',
    ];
}