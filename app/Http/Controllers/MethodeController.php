<?php

namespace App\Http\Controllers;


use App\Methode;
use App\Wilaya;
use App\Sub;
use Response;
use Illuminate\Http\Request;

class MethodeController extends Controller
{

    public function index()
    {
        $methodes = Methode::all();
        return view('methodes.index',compact('methodes'));
    }

    public function store(Request $request)
    {
        $methode = new Methode();   
        $methode->nom = $request['nom'];
        $methode->reference = $request['reference'];
        $methode->description = $request['description'] ?? '';
        $methode->save();
        return redirect()->route('methode.index')->with('success', 'inserted successfuly ! ');
    }
    public function destroy($methode)
    {
        $methode = Methode::find($methode);
        $methode->delete();
        return redirect()->route('methode.index')->with('success', 'supprimé avec succé !');
    }

    public function update(Request $request)
    {
        $methode = Methode::find($request['id_methoe']);
        $methode->nom = $request['nom'];
        $methode->reference = $request['reference'];
        $methode->description = $request['description'] ?? '';
        $methode->save();
        return redirect()->route('methode.index')->with('success', 'Methode Modifié ! ');
    }
}
