<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function remorques()
    {
        return Remorque::where('client',$this->id)->get();
    }
    ///////////////////////////////
    public function camions()
    {
        return Camion::where('client',$this->id)->get();        
    }

    public function chauffeurs()
    {
        return Chauffeur::where('client',$this->id)->get();        
    }

    public function matricules()
    {
        return Chauffeur::where('client',$this->id)->get();        
    }


    public function lastFacture()
    {
        return "12/09/2022";        
    }

    public function payments()
    {
        $payments = Payment::where('client',$this->id)->get();
        return $payments;
    }

}
