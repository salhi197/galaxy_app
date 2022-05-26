<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MethodeUser extends Model
{
    protected $table = 'users_methodes';

    public function methode()
    {
        return Methode::find($this->methode);
    }


    public function user()
    {
        return User::find($this->user);
    }
}
