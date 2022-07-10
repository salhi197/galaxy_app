<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'telephone',
        'pays',
        'code_email',
        'solde',
        'refered_user',
        'nom',
        'code',
        'password',
        'password_text'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function partenaires()
    {
        $users =User::where('refered_user',$this->id)->get();
        return $users;
    }

    public function rang()
    {
        $solde = $this->solde_actif;
        $partenaires = $this->partenaires();
        if(count($partenaires)>0){
            foreach($partenaires as $partenaire){
                $solde = $solde + $partenaire->solde_actif;
            }
        }
        // while($id!=null){
        //     $user = User::find($id);
        //     $solde = $solde+$user->solde;
        //     $id = $user->refered_user;
        // }
        if ($solde>500+5000 and $solde<9999+5000) {
            return 1;
        }
        if ($solde>10000+5000 and $solde<24999+5000) {
            return 2;
        }
        if ($solde>25000+5000 and $solde<49999+5000) {
            return 3;
        }

        if ($solde>50000+5000 and $solde<99999+5000) {
            return 4;
        }
        if ($solde>99999+5000 and $solde<249999+5000) {
            return 5;
        }
        if ($solde>250000+5000 and $solde<499999+5000) {
            return 6;
        }
        if ($solde>500000+5000 and $solde<999999+5000) {
            return 7;
        }
        /////////////////////////////////////////////// 
        return 1;
    }


    public function rangName()
    {
        $solde = $this->solde_actif;
        $partenaires = $this->partenaires();
        if(count($partenaires)>0){
            foreach($partenaires as $partenaire){
                $solde = $solde + $partenaire->solde_actif;
            }
        }
        if ($solde>500+5000 and $solde<9999+5000) {
            return "beginner";
        }
        if ($solde>10000+5000 and $solde<24999+5000) {
            return "consultant";
        }
        if ($solde>25000+5000 and $solde<49999+5000) {
            return "supervisor";
        }

        if ($solde>50000+5000 and $solde<99999+5000) {
            return "elite";
        }
        if ($solde>99999+5000 and $solde<249999+5000) {
            return "manager";
        }
        if ($solde>250000+5000 and $solde<499999+5000) {
            return "safir";
        }
        if ($solde>500000+5000 and $solde<999999+5000) {
            return "diamond king";
        }
        /////////////////////////////////////////////// 
        return "";
    }

    public function parrain()
    {
        $user = User::find($this->refered_user);
        return $user;
    }

}
