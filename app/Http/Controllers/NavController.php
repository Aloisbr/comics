<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Designer;

class NavController extends Controller
{
    public function home() 
    {
        return view('home');
    }

    public function characters() 
    {
        $characters = Character::all()->sortBy('name');
        return view('characters', ['characters' => $characters]);
    }

    public function character($id)
    {
        $character = Character::find($id);
        return view('character', ['character' => $character]);
    }

    public function editCharacter($id)
    {
        $character = Character::find($id);
        $character_designer = Designer::find($character->designer_id)->name;
    
        $designers = Designer::all()->sortBy('name');
        return view('editCharacter', ['character' => $character, 'designers' => $designers, 'character_designer' => $character_designer]);
    }

    public function addCharacter()
    {
        $designers = Designer::all()->sortBy('name');
        return view('addCaracter', ['designers' => $designers]);
    }

    public function designers() 
    {
        $designers = Designer::all()->sortBy('name');
        return view('designers', ['designers' => $designers]);
    }

    public function designer($id)
    {
        $designer = Designer::find($id);
        return view('designer', ['designer' => $designer]);
    }

    public function editDesigner($id)
    {
        $designer = Designer::find($id);
    
        return view('editDesigner', ['designer' => $designer]);
    }

    public function addDesigner()
    {
        return view('addDesigner');
    }
}
