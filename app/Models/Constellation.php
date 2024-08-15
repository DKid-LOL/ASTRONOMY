<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constellation extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'image',
        'description',
        'history',
        'ythology',
        'tars',
    ];
}