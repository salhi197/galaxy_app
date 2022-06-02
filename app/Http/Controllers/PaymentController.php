<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Operation;
use Auth;
use App\Http\Requests\StoreUser;
use App\User;
use App\Payment;

use Illuminate\Support\Facades\Hash;

class PaymentController extends Controller
{
    public function rechargements()
    {
        $interval = "";
        if(Auth::guard('admin')->check()){
            $operations = Operation::where('type',1)
            ->where('etat',1)
            ->whereMonth('next_payment_date',date('m'))
            ->get();
            return view('payments.rechargements',compact('operations','interval'));    
        }
    }

    public function filter(Request $request)
    {
        $interval = $request['interval'];
        if($interval==0){
            return redirect()->route("payment.rechargements")->with('Error', 'Séléctionner un interval ');        
        }
        if($interval==1){
            $operations = Operation::where('type',1)->where('etat',1)
            ->whereDay('validated_date', '>=', 1)
            ->whereDay('validated_date', '<=', 9)            
            ->whereMonth('next_payment_date',date('m'))
            ->get();
        }
        if($interval==2){
            $operations = Operation::where('type',1)->where('etat',1)
            ->whereDay('validated_date', '>=', 10)
            ->whereDay('validated_date', '<=', 20)            
            ->whereMonth('next_payment_date',date('m'))
            ->get();

        }
        if($interval==3){
            $operations = Operation::where('type',1)->where('etat',1)
            ->whereDay('validated_date', '>=', 21)
            ->whereDay('validated_date', '<=', 31)            
            ->whereMonth('next_payment_date',date('m'))
            ->get();
        }
        return view('payments.rechargements',compact('operations','interval'));    

    }

    public function store(Request $request,$operation_id)
    {
        $operation = Operation::find($operation_id);

        $user = User::find($operation->user);
        $rang = $user->rang();
        $pourcentage = $request['pourcentage'];
        $solde_retrait = $user->solde*$pourcentage/100;
        $user->solde_retrait = $solde_retrait;
        $user->save();
        $payment = new Payment();
        $payment->user = $user->id;
        $payment->operation = $operation->id;
        $payment->pourcentage = $pourcentage;
        $payment->montant = $solde_retrait;
        $payment->save();
        return redirect()->route('payment.rechargements')->with('success', 'Inséré avec succés ');        

        
        
        
    }

}
