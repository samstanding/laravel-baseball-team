<?php

namespace App\Http\Controllers;

use App\Types;

use Illuminate\Http\Request;

class TypesController extends Controller
{
    public function index() 
    {
        $types = Types::all();
        return view('players.types', compact('types'));
    }

    public function show(Types $type)
    {
        return view ('players.status', compact('type'));
        
    }
}

