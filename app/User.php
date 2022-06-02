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

    public function rang()
    {
        $solde = $this->solde;
        $id = $this->refered_user;
        if($id!==null){
            do {
                $user = User::find($id);
                $solde = $solde+$user->solde;
                $id = $user->refered_user;
            } while ($id!==null);
        }
        if ($solde>500 and $solde<9999) {
            return 1;
        }
        if ($solde>10000 and $solde<24999) {
            return 1;
        }
        // if ($solde>500 and $solde<9999) {
        //     return 1;
        // }
        // if ($solde>500 and $solde<9999) {
        //     return 1;
        // }
        return 0;
    }

}
