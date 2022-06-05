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
class NotificationController extends Controller
{
    public function index()
    {
        return redirect()->route('home');
    }
}
