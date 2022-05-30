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
        $user_id = Auth::user()->id;
        $users = DB::select("select pays, count(*) from users u where refered_user=$user_id group by pays");
        // dd($users[0]);
       
        return view('home');
    }

    public function forgetPassword()
    {       
        return view('auth.forget-password');
    }

    public function forgetPasswordAction(Request $request)
    {
        $code= mt_rand( 100000, 999999 );
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
