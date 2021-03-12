<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Designer;
use Illuminate\Http\Request;

class DesignerController extends Controller
{
    public static function store(Request $request) 
    {
        $designer = new Designer;

        $designer->name = $request->name;
        $designer->nationality = $request->nationality;
        $designer->birth_year = $request->birth_year;

        $designer->save();
        return redirect('/designers');
    }

    public static function remove(Request $request)
    {
        $characters = Character::all();
        foreach($characters as $character) {
            if ($character->designer->name === Designer::find($request->id)->name){
                Character::destroy($character->id);
            }
        }
        Designer::destroy($request->id);
        return redirect('/designers');
    }

    public static function edit(Request $request)
    {
        $designer = Designer::find($_POST['id']);
        $designer->name = $request->name;
        $designer->nationality = $request->nationality;
        $designer->birth_year = $request->birth_year;

        $designer->save();
        return redirect('/designers');
    }
}
