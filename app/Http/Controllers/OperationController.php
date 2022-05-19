<?php

namespace App\Http\Controllers;

use App\Operation;
use Auth;
use App\Remorque;
use Illuminate\Http\Request;

class OperationController extends Controller
{

    public function index()
    {
        $operations = Operation::all();
        return view('operations.index',compact('operations'));

    }

    /**
     * 
     */
    
    public function indexRechargement()
    {
        $operations = Operation::where('type',1)->get();
        return view('operations.index_recharger',compact('operations'));

    }
    public function rechargerShow()
    {
        return view('operations.recharger');
    }    
    public function rechargerAction(Request $request)
    {

        // $operation = new Operation();
        // $operation->montant =$request['montant']; 
        // $operation->methode =$request['methode']; 
        // $operation->type=1;
        // $operation->etat=0;
        // $operation->user=Auth::user()->id;
        // $operation->save();
        // return redirect()->route('operation.recharger.index')->with('success', 'Inséré avec succés ');        
        $montant =$request['montant']; 
        $methode =$request['methode']; 
        $adress = "";
        if($methode=="prefectmoney"){
            $adress = "P1066536669";
        }
        if($methode=="btc"){
            $adress = "P1066536669";
        }
        if($methode=="usdt_trc20"){
            $adress = "TUVoQDLiJS8ZNpeLpCg2JxsBAPiVtxVHUa";
        }
        if($methode=="usdt_erc20"){
            $adress = "0x4dfa421259901c9a0d5f7f31d514f429d077deb4";
        }

        return view('operations.rechargement',compact('montant','methode','adress'));

    }    

    /**
     * 
     */


    public function indexTransfert()
    {
        $operations = Operation::where('type',1)->get();
        return view('operations.index_recharger',compact('operations'));

    }
    public function transfererShow()
    {
        return view('operations.transferer');
    }    
    public function transfererAction(Request $request)
    {
        $operation = new Operation();
        $operation->montant =$request['montant']; 
        $operation->methode =$request['methode']; 
        $operation->type=1;
        $operation->etat=0;
        $operation->user=Auth::user()->id;
        $operation->save();

        return redirect()->route('operation.transferer.index')->with('success', 'Inséré avec succés ');        
    }    


}
