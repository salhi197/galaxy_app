<?php

namespace App\Http\Controllers;

use App\Client;
use App\Camion;
use App\Remorque;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $item = "client";
        return view('clients.index',compact('clients','item'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $client = new Client();
        $client->nom = $request['nom'];
        $client->prenom = $request['prenom'];
        $client->telephone = $request['telephone'];
        $client->rib = $request['rib'];
        $client->adress = $request['adress'];        
        $client->type = $request['type'];        
        // dd($client);
        $client->save();
        /**
         * ajoiter remorques
         */
        foreach ($request['dynamic_form']['dynamic_form'] as $array) {
            

            if(isset($array['matricule_remorque'])){
                $remorque = Remorque::where('matricule',$array['matricule_remorque'])->first();
                if(!$remorque){
                    $remorque = new Remorque();
                }
                $remorque->matricule = $array['matricule_remorque'];
                $remorque->client = $client->id;
                // $remorque->expiration_carte_grise = $array['expiration_carte_grise_remorque'];
                $remorque->expiration_assurance = $array['expiration_assurance_remorque'] ?? null;
                $remorque->expiration_scanner = $array['expiration_scanner_remorque'] ?? null;
                $remorque->gps = $array['gps_remorque'] ?? null;
                
                if (isset($array['carte_grise_remorque'])) {
                    $remorque->carte_grise = $array['carte_grise_remorque']->store(
                        'camion/carte_grise_remorque',
                        'public'
                    );
                }
                if (isset($array['assurance_remorque'])) {
                    $remorque->assurance = $array['assurance_remorque']->store(
                        'camion/assurance_remorque',
                        'public'
                    );
                }
                if (isset($array['scanner_remorque'])) {
                    $remorque->scanner = $array['scanner_remorque']->store(
                        'camion/scanner_remorque',
                        'public'
                    );
                }

                $remorque->save();    
            }
        }


        foreach ($request['dynamic_form2']['dynamic_form2'] as $array) {
            if (isset($array['matricule_camion'])) {
                $camion = new Camion();
                $camion->client = $client->id;
                // $camion->expiration_carte_grise = $array['expiration_carte_grise_camion'];
                $camion->expiration_assurance = $array['expiration_assurance_camion'];
                $camion->expiration_scanner = $array['expiration_scanner_camion'];                
                $camion->matricule = $array['matricule_camion'];
                $camion->gps = $array['gps'] ?? null;
                
                if (isset($array['carte_grise_camion'])) {
                    $camion->carte_grise = $array['carte_grise_camion']->store(
                        'camion/carte_grise_camion',
                        'public'
                    );
                }
                if (isset($array['assurance_camion'])) {
                    $camion->assurance = $array['assurance_camion']->store(
                        'camion/assurance_camion',
                        'public'
                    );
                }
                if (isset($array['scanner_camion'])) {
                    $camion->scanner = $array['scanner_camion']->store(
                        'camion/scanner_camion',
                        'public'
                    );
                }
    
                $camion->save();
    
            }

        }

        return redirect()->route('client.index')->with('success', ' inséré avec succés ');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($client)
    {
        $client = Client::find($client);
        return view('clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $client)
    {
        $client = Client::find($client);
        $client->nom = $request['nom'];
        $client->type = $request['type'];        
        $client->prenom = $request['prenom'];
        $client->telephone = $request['telephone'];
        $client->rib = $request['rib'];
        $client->adress = $request['adress'];        
        $client->type = $request['type'];        
        $client->save();
        /**
         * ajoiter remorques
         */
        foreach ($request['dynamic_form']['dynamic_form'] as $array) {
            if(isset($array['matricule_remorque'])){
                $remorque = Remorque::where('matricule',$array['matricule_remorque'])->first();
                if(!$remorque){
                    $remorque = new Remorque();
                }
                $remorque->matricule = $array['matricule_remorque'];
                $remorque->client = $client->id;
                $remorque->expiration_carte_grise = $array['expiration_carte_grise_remorque'] ?? null;
                $remorque->expiration_assurance = $array['expiration_assurance_remorque'] ?? null;
                $remorque->expiration_scanner = $array['expiration_scanner_remorque'] ?? null;
                $remorque->gps = $array['gps_remorque'] ?? null;

                if (isset($array['carte_grise_remorque'])) {
                    $remorque->carte_grise = $array['carte_grise_remorque']->store(
                        'camion/carte_grise_remorque',
                        'public'
                    );
                }
                if (isset($array['assurance_remorque'])) {
                    $remorque->assurance = $array['assurance_remorque']->store(
                        'camion/assurance_remorque',
                        'public'
                    );
                }
                if (isset($array['scanner_remorque'])) {
                    $remorque->scanner = $array['scanner_remorque']->store(
                        'camion/scanner_remorque',
                        'public'
                    );
                }
                $remorque->save();    
            }
        }

        foreach ($request['dynamic_form2']['dynamic_form2'] as $array) {
            if (isset($array['matricule_camion'])) {
                $camion = new Camion();
                $camion->gps = $array['gps'];

                $camion->client = $client->id;
                $camion->matricule = $array['matricule_camion'];
                $camion->expiration_carte_grise = $array['expiration_carte_grise_camion'] ?? null;
                $camion->expiration_assurance = $array['expiration_assurance_camion'] ?? null;
                $camion->expiration_scanner = $array['expiration_scanner_camion'] ?? null;

                if (isset($array['carte_grise_camion'])) {
                    $camion->carte_grise = $array['carte_grise_camion']->store(
                        'camion/carte_grise_camion',
                        'public'
                    );
                }
                if (isset($array['assurance_camion'])) {
                    $camion->assurance = $array['assurance_camion']->store(
                        'camion/assurance_camion',
                        'public'
                    );
                }
                if (isset($array['scanner_camion'])) {
                    $camion->scanner = $array['scanner_camion']->store(
                        'camion/scanner_camion',
                        'public'
                    );
                }
                $camion->save();        
            }

        }

        return redirect()->route('client.index')->with('success', ' inséré avec succés ');        


    }


    public function destroy($client)
    {
        $remorques = Remorque::where('client',$client)->delete();
        $camions = Camion::where('client',$client)->delete();
         
        $client = Client::find($client)->delete();
        return redirect()->route('client.index')->with('success', ' inséré avec succés ');        
    }
}
