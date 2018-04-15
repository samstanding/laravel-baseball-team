<?php

namespace App\Http\Controllers;

use App\Player;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index() 
    {
        $players = Player::latest()->get();

        return view ('players.index', compact('players'));
    }
}
