<?php

namespace App\Http\Controllers;

use App\Operation;
use Auth;
use App\User;

use App\Remorque;
use Illuminate\Http\Request;

class OperationController extends Controller
{

    public function index()
    {
        if(Auth::guard('admin')->check()){
        }
        if(Auth::check()){
            $operations = Operation::where('user',Auth::user()->id)->get();
            return view('operations.index',compact('operations'));    
        }


    }

    /**
     * 
     */

    public function indexRechargementActif()
    {
        if(Auth::guard('admin')->check()){
            $operations = Operation::where('type',1)->get();
            return view('operations.index_recharger',compact('operations'));    
        }
        if(Auth::check()){
            $operations = Operation::where(
                ['etat'=>1],
                ['user'=>Auth::user()->id]

            )->get();
            return view('operations.index_recharger',compact('operations'));    
        }
    }

    public function indexRechargement()
    {
        if(Auth::guard('admin')->check()){
            $operations = Operation::where('type',1)->get();
            return view('operations.index_recharger',compact('operations'));    
        }
        if(Auth::check()){
            $operations = Operation::where([
                ['type'=>1],
                ['user'=>Auth::user()->id]
                ]
            )->get();
            return view('operations.index_recharger',compact('operations'));    
        }
    }

    public function rechargerShow()
    {
        return view('operations.recharger');
    }    
    public function rechargerAction(Request $request)
    {

        $operation = new Operation();
        $operation->montant =$request['montant']; 
        $operation->methode =$request['methode']; 
        $operation->type=1;
        $operation->etat=0;
        $operation->user=Auth::user()->id;
        $operation->save();
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

    public function rechargerValider($operation)
    {
        $operation = Operation::find($operation);
        $user = User::find($operation->user);
        $montant = $user->solde+$operation->montant;
        $user->solde = $montant;
        $user->save();

        $operation->etat = 1;
        $operation->save();
        return redirect()->back()->with('success', 'Valider Avec succés ');        

    }

    public function rechargerAnnuler($operation)
    {
        $operation = Operation::find($operation);
        $operation->etat = -1;
        $operation->save();
        return redirect()->back()->with('success', 'Annuler Avec succés ');        
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

    /**
     * 
     * 
     * 
     * 
     */

    public function indexRetrait()
    {
        if(Auth::guard('admin')->check()){
            $operations = Operation::where('type',-1)->get();
            return view('operations.index_retirer',compact('operations'));    
        }
        if(Auth::check()){
            $operations = Operation::where([
                ['type'=>-1],
                ['user'=>Auth::user()->id]
                ]
            )->get();
            return view('operations.index_recharger',compact('operations'));    
        }
    }

    public function retirerShow()
    {
        return view('operations.retirer');
    }    
    public function retirerAction(Request $request)
    {
        $operation = new Operation();
        $operation->montant =$request['montant']; 
        $operation->methode =$request['methode']; 
        $operation->type=-1;
        $operation->etat=0;
        $operation->user=Auth::user()->id;
        $operation->save();
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

        return view('operations.retrait',compact('montant','methode','adress'));

    }    

}
