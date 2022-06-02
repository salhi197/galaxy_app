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
    public static function rang(User $user)
    {
        $solde = $user->solde;
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
        return 1;
    }

}
