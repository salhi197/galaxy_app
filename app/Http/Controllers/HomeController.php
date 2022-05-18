<?php

namespace App\Http\Controllers;

use App\Wilaya;
use App\Fichier;
use App\Telephone;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Client;
use App\Camion;
use App\Remorque;
use App\Sms;
use App\Attachement;



use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
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
       
        return view('home');
    }

    public function saisir_frais(Request $request)
    {

        DB::update("update ecoles set frais = '$request->frais' ");

        return back();

        // code...
    }

    //
}
