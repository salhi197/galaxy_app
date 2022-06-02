<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Operation;
use Auth;
use Carbon\Carbon;
use App\Http\Requests\StoreUser;
use App\User;
use App\Notification;
use App\Payment;

use Illuminate\Support\Facades\Hash;

class PaymentController extends Controller
{
    public function rechargementsPaye()
    {
        $payments = Payment::whereMonth('created_at',date('m'))->pluck('operation');
        $operations = Operation::whereIn('id',$payments)->get();
        $interval="";
        return view('payments.rechargements-paye',compact('operations','interval'));    
    }
    public function rechargementsMonth()
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
    public function rechargements()
    {
        $interval = "";
        if(Auth::guard('admin')->check()){
            $operations = Operation::where('type',1)
            ->where('etat',1)
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
        $operation->next_payment_date = Carbon::now()->addMonths(1);
        $operation->save();
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

        $id = $user->refered_user;
        $i = 1;
        while ($id!==null){
            $user = User::find($id);
            $id = $user->refered_id;
            $prct = 0;
            $solde_retrait =$user->solde_retrait;
            if($i==1){
                // $rang = $user->rang();
                $solde_retrait = $user->solde*0.03;
                $prct = 0.03;
            }
            if($i==2){
                $rang = $user->rang();
                if($rang>1){
                    $solde_retrait = $user->solde*0.02;
                    $prct = 0.02;
                }
            }
            if($i==3){
                $rang = $user->rang();
                if($rang>2){
                    $solde_retrait = $user->solde*0.01;
                    $prct = 0.01;
                }
            }
            $user->solde_retrait = $solde_retrait;        
            $user->save();    
            $message = $prct.' a été ajouté à votre compte aprés la mise à jour de solde du compte sponsorisé par vous .';
            Notification::insert($user->id,'Pourcentage Ajouter à votre solde',$message);

            $i++;
        };
        return redirect()->route('payment.rechargements')->with('success', 'Inséré avec succés ');                
    }

}
