<?php

namespace App\Http\Controllers;

use App\Player;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index() 
    {
        $players = Player::join('types', 'types.id', '=', 'players.types_id')->get();

        return view ('players.index', compact('players'));
    }

    public function create() 
    {
        return view ('players.create');
    }

    public function store() 
    {
        $this->validate(request(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'position' => 'required',
            'types_id' => 'required',
        ]);
 
         Player::create(request(['first_name', 'last_name', 'position', 'types_id' ]));
         //redirect to home page
 
         return redirect('/players');
    }

    public function show($id) 
    {
        $player = Player::join('types', 'types.id', '=', 'players.types_id')->find($id);
        return view ('players.show', compact('player'));
    }
}
