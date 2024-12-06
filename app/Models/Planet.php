<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image', 
        'description', 
        'diameter', 
        'atmosphere', 
        'distance_from_sun', 
        'distance_from_earth',
    ];
}
