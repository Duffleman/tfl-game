<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameStateController extends Controller
{
    public function create(Request $request)
    {
        $attributes = request()->validate([
            'player_name' => '',
            'config' => 'required',
            'config.lines' => 'array|min:1',
            'config.zones' => 'array|min:1',
        ]);

        return $attributes;
    }
}
