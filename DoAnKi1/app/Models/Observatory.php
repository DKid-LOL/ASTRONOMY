<?php
//Model về đài quan sát
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Observatory extends Model
{
    public function planets()
    {
        return $this->hasMany(Planet::class);
    }
}

