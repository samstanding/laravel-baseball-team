<?php

namespace App;

class Player extends Model
{
    public function post() 
    {
        return $this->belongsTo(Types::class);
    }

    // 
}
