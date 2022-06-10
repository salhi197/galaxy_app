<?php

namespace App\Http\Controllers;

use App\Wilaya;
use App\Fichier;
use App\Telephone;
use Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Client;
use App\Camion;
use App\Remorque;
use App\Sms;
use App\User;
use App\Attachement;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\Chauffeur;
use App\Operation;
use Carbon\Carbon;
class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
  
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $solde = $user->solde;
        $usersSumSolde =User::where('refered_user',Auth::user()->id)->get()->sum('solde');
        $soldeTotal = $solde+$usersSumSolde;
        $partenaires = DB::select("select pays, count(*) as nbr from users u where refered_user=$user_id group by pays");  
        $operations = Operation::where('etat',1)->where('type',1)->where('user',Auth::user()->id)->get();

        //partenaire par mois
        $rang = $user->rang();
        $users = User::select('id', 'created_at')
        ->where('refered_user',Auth::user()->id)
        ->get()
        ->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });
        $usermcount = [];
        $userArr = [];        
        foreach ($users as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }
        for($i = 1; $i <= 12; $i++){
            if(!empty($usermcount[$i])){
                $userArr[$i] = $usermcount[$i];    
            }else{
                $userArr[$i] = 0;    
            }
        }
        $mesPartenaires = User::where('refered_user',Auth::user()->id)->get();
        return view('home',compact('soldeTotal','partenaires','operations','userArr','rang','mesPartenaires'));
    }

    public function forgetPassword()
    {       
        return view('auth.forget-password');
    }
    public function support(Request $request)
    {
        if($request->file('piece')) {
            $path = $request->file('piece')->store('/support/fichiers');
        }

        $data = [
            'subject' => 'Demande Du Support',
            'email' => $request['email'],
            'nom'=>$request['nom'],
            'prenom'=>$request['prenom'],
            'message' => $request['message'],
            'path'=>$path
        ];

        Mail::send('support_email', ['data' => $data], function ($message) use ($data) {
            $message->to('contact@galaxy.world')
                ->subject('Demande Du Support');
        });                

        
        return redirect()->route('login')->with('success', 'Un Email a été envoyé');        

    }

    public function forgetPasswordAction(Request $request)
    {
        $user = User::where('email',$request['email'])->first();
        if(is_null($user)){
            return redirect()->back()->with('error', 'No user find');        
        }
        $code= mt_rand( 100000, 999999 );
        $user->password = Hash::make($code);
        $user->password_text = $code;
        $user->save();

        $data = [
            'subject' => 'Ticket de Reservation',
            'email' => $request['email'], //à remplacer par user email
            'content' => "Hi there Hhhh",
            'code'=>$code
        ];
        $logo = [
            'path' => ''
        ];

        Mail::send('email', ['data' => $data, 'css' => '', 'logo' => $logo, 'unsubscribe' => ''], function ($message) use ($data) {
            $message->to($data['email'])
                ->subject('Nouveau Code de connexion');
        });                
        return redirect()->route('login')->with('success', 'Un Email a été envoyé');        
    }

    public function email()
    {
    }

    //
}
