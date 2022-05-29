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
            $operations = Operation::where(
                ['type'=>1],
                ['user'=>Auth::user()->id]
                
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
        $operations = Operation::where('type',2)->get();
        return view('operations.index_transfert',compact('operations'));

    }
    public function transfererShow()
    {
        return view('operations.transferer');
    }    
    public function transfererAction(Request $request)
    {
        $sender_user = User::find(Auth::user()->id);

        if($request['identifiant'] == "telephone"){
            $received_user  = User::where("telephone",$request['email_or_telephone'])->first();
        }elseif($request['identifiant'] == "email"){
            $received_user  = User::where("email",$request['email_or_telephone'])->first();
        }else{
            return redirect()->back()->with('error', 'Erreur Inconnu ');        
        }
        if(is_null($received_user)){
            return redirect()->back()->with('error', 'Reveiver not found ');        
        }
        if($received_user->id == Auth::user()->id){
            return redirect()->back()->with('error', 'Ereur 209');        
        }
        if($sender_user->solde<$request['montant']){
            return redirect()->back()->with('error', 'Motant Dépassé');        
        }
        $operation = new Operation();
        $operation->montant =$request['montant']; 
        // $operation->methode =$request['methode']; 
        $operation->type=2;
        $operation->etat=0;
        $operation->user=Auth::user()->id;
        $operation->user_2=$received_user->id;//Auth::user()->id;
        $operation->save();
        /**
         * Incrementer le solde de user 1
         */
        $sender_user->solde = $sender_user->solde - $request['montant'];
        $sender_user->save(); 
        /**
         * décrementer le solde de user 2
        */
        $received_user->solde = $received_user->solde + $request['montant'];
        $received_user->save(); 

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
        $operations = Operation::where(
            ['type'=>-1],
            ['user'=>Auth::user()->id]
        )->get();
        $countOperations = count($operations);
        return view('operations.retirer',compact('countOperations'));
    }    
    public function retirerAction(Request $request)
    {

        $user = User::find(Auth::user()->id);
        if($request['montant']>$user->solde){
            return redirect()->route('operation.recharger.index')->with('success', 'Vous pouvez pas retirer une tel montant ');        
        }
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
