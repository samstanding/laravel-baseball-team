<?php

namespace App;


class Types extends Model
{
    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
