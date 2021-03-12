<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    
    public function designer()
    {
        return $this->belongsTo(Designer::class);
    }
}
