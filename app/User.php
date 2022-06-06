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
        $solde = $this->solde;
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
        if ($solde>500 and $solde<9999) {
            return 1;
        }
        if ($solde>10000 and $solde<24999) {
            return 2;
        }
        if ($solde>25000 and $solde<49999) {
            return 3;
        }

        if ($solde>50000 and $solde<99999) {
            return 4;
        }
        if ($solde>99999 and $solde<249999) {
            return 5;
        }
        if ($solde>250000 and $solde<499999) {
            return 6;
        }
        if ($solde>500000 and $solde<999999) {
            return 7;
        }
        /////////////////////////////////////////////// 
        return 1;
    }

}
