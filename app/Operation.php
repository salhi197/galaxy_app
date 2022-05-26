<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    public function user()
    {
        $user = User::find($this->user);
        return $user; 
    }
}
