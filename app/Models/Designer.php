<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    
    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
