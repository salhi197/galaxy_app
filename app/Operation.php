<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    
    public function receiver()
    {
        $user = User::find($this->user_2);
        return $user; 
    }
    public function user()
    {
        $user = User::find($this->user);
        return $user; 
    }
}
