<?php

namespace App\Http\Controllers;

use App\Client;
use App\Camion;
use App\Remorque;
use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    public function rechercher()
    {
        return view('partenaires.rechercher');
    }


    public function destroy($client)
    {
        $remorques = Remorque::where('client',$client)->delete();
        $camions = Camion::where('client',$client)->delete();
         
        $client = Client::find($client)->delete();
        return redirect()->route('client.index')->with('success', ' inséré avec succés ');        
    }
}
