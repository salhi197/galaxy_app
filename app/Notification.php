<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PHPUnit\Framework\Error\Notice;

class Notification extends Authenticatable
{
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function insert($user,$title,$message)
    {
        $notification = new Notification();
        $notification->user = $user;
        $notification->title = $title;
        $notification->message = $message;   
        try {
            $notification->save();
        } catch (\Throwable $th) {
            return 0;
        }
        return 1;

    }

}
