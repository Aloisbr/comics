<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;


class CharacterController extends Controller
{
    public static function store(Request $request) 
    {
        $character = new Character;

        $character->name = $request->name;
        $character->designer_id = $request->designer_id;
        $character->comics = $request->comics;
        $character->creation_year = $request->creation_year;

        $character->save();
        return redirect('/characters');
    }

    public static function remove(Request $request)
    {
        Character::destroy($request->id);
        return redirect('/characters');
    }

    public static function edit(Request $request)
    {
        $character = Character::find($_POST['id']);
        
        $character->name = $request->name;
        $character->designer_id = $request->designer_id;
        $character->comics = $request->comics;
        $character->creation_year = $request->creation_year;

        $character->save();
        return redirect('/characters');
    }
}
