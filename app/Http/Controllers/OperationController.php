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
        $operation = new Operation();
        $operation->montant =$request['montant']; 
        $operation->methode =$request['methode']; 
        $operation->type=1;
        $operation->etat=0;
        $operation->user=Auth::user()->id;
        $operation->save();

        return redirect()->route('operation.recharger.index')->with('success', 'Inséré avec succés ');        
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
