<?php
//model về các hành tinh
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    protected $fillable = ['name', 'size', 'atmosphere', 'distance_from_sun', 'distance_from_earth'];
}
