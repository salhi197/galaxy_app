<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Template extends Authenticatable
{
    public static function certificat(User $user,Operation $operation)
    {
        // dd(asset('img/pdf/vi_1.png'));
        $html = '
        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
        <html>
        <head>
        <link rel="stylesheet" type="text/css" href="'.asset('css/pdf/style.css').'"/>
        </head>
        <style>
        html { margin: 0px}        
        </style>
        <body>
        <img style="position:absolute;top:0.00in;left:0.00in;width:9.57in;height:6.77in" src="'.asset('img/pdf/vi_1.png').'" />
        <img style="position:absolute;top:0.00in;left:0.00in;width:9.57in;height:6.77in" src="'.asset('img/pdf/ci_1.png').'" />
        <img style="position:absolute;top:0.00in;left:0.00in;width:9.57in;height:6.77in" src="'.asset('img/pdf/shi_1.png').'" />
        <img style="position:absolute;top:5.78in;left:0.00in;width:4.66in;height:0.99in" src="'.asset('img/pdf/ci_2.png').'" />
        <img style="position:absolute;top:0.00in;left:0.00in;width:9.57in;height:6.77in" src="'.asset('img/pdf/shi_2.png').'" />
        <img style="position:absolute;top:2.07in;left:6.03in;width:2.85in;height:3.22in" src="'.asset('img/pdf/ci_3.png').'" />
        <div style="position:absolute;top:3.47in;left:0.83in;width:4.91in;line-height:0.42in;"><span style="font-style:normal;font-weight:bold;font-size:23pt;font-family:Swis721 Ex BT;color:#191918">POUR </span></SPAN><br/></div>
        <div style="position:absolute;top:3.47in;left:0.83in;width:4.91in;line-height:0.42in;"><DIV style="position:relative; left:1.36in;"><span style="font-style:normal;font-weight:bold;font-size:23pt;font-family:Swis721 Ex BT;color:#191918">LE </span></SPAN></DIV><br/></div>
        <div style="position:absolute;top:3.47in;left:0.83in;width:4.91in;line-height:0.42in;"><DIV style="position:relative; left:1.98in;"><span style="font-style:normal;font-weight:bold;font-size:23pt;font-family:Swis721 Ex BT;color:#191918">MONTANT </span></SPAN></DIV><br/></div>
        <div style="position:absolute;top:3.47in;left:0.83in;width:4.91in;line-height:0.42in;"><DIV style="position:relative; left:4.21in;"><span style="font-style:normal;font-weight:bold;font-size:23pt;font-family:Swis721 Ex BT;color:#191918">DE</span><span style="font-style:normal;font-weight:bold;font-size:23pt;font-family:Swis721 Ex BT;color:#191918"> </span><br/></SPAN></DIV></div>
        <div style="position:absolute;top:3.47in;left:0.83in;width:4.91in;line-height:0.42in;"><DIV style="position:relative; left:6.21in;"><span style="font-style:normal;font-weight:bold;font-size:33pt;font-family:Swis721 Ex BT;color:#c7ac63">'.$operation->montant.'</span><span style="font-style:normal;font-weight:bold;font-size:23pt;font-family:Swis721 Ex BT;color:#191918"> </span><br/></SPAN></DIV></div>


        <div style="position:absolute;top:4.40in;left:0.83in;width:4.38in;line-height:0.27in;"><span style="font-style:normal;font-weight:bold;font-size:15pt;font-family:Swis721 Ex BT;color:#e1cc8e">POUR </span></SPAN><br/></div>
        <div style="position:absolute;top:4.40in;left:0.83in;width:4.38in;line-height:0.27in;"><DIV style="position:relative; left:0.88in;"><span style="font-style:normal;font-weight:bold;font-size:15pt;font-family:Swis721 Ex BT;color:#e1cc8e">UNE </span></SPAN></DIV><br/></div>
        <div style="position:absolute;top:4.40in;left:0.83in;width:4.38in;line-height:0.27in;"><DIV style="position:relative; left:1.55in;"><span style="font-style:normal;font-weight:bold;font-size:15pt;font-family:Swis721 Ex BT;color:#e1cc8e">DURÉ </span></SPAN></DIV><br/></div>
        <div style="position:absolute;top:4.40in;left:0.83in;width:4.38in;line-height:0.27in;"><DIV style="position:relative; left:2.41in;"><span style="font-style:normal;font-weight:bold;font-size:15pt;font-family:Swis721 Ex BT;color:#e1cc8e">D’UNE </span></SPAN></DIV><br/></div>
        <div style="position:absolute;top:4.40in;left:0.83in;width:4.38in;line-height:0.27in;"><DIV style="position:relative; left:3.36in;"><span style="font-style:normal;font-weight:bold;font-size:15pt;font-family:Swis721 Ex BT;color:#e1cc8e">ANNÉE</span><span style="font-style:normal;font-weight:bold;font-size:15pt;font-family:Swis721 Ex BT;color:#e1cc8e"> </span><br/></SPAN></DIV></div>


        <div style="position:absolute;top:4.90in;left:0.83in;width:4.38in;line-height:0.27in;"><DIV style="position:relative; left:0.88in;"><span style="font-style:normal;font-weight:bold;font-size:15pt;font-family:Swis721 Ex BT;color:#e1cc8e">'.$user->nom.' </span></SPAN></DIV><br/></div>
        <div style="position:absolute;top:4.90in;left:0.83in;width:4.38in;line-height:0.27in;"><DIV style="position:relative; left:1.55in;"><span style="font-style:normal;font-weight:bold;font-size:15pt;font-family:Swis721 Ex BT;color:#e1cc8e">'.$user->name.' </span></SPAN></DIV><br/></div>

        <img style="position:absolute;top:1.79in;left:0.56in;width:3.21in;height:1.34in" src="'.asset('img/pdf/ri_1.png').'" />
        <img style="position:absolute;top:4.26in;left:7.23in;width:0.45in;height:0.71in" src="'.asset('img/pdf/ri_2.png').'" />
        <div style="position:absolute;top:0.31in;left:3.14in;width:2.93in;line-height:0.48in;"><span style="font-style:normal;font-weight:bold;font-size:26pt;font-family:Swis721 Ex BT;color:#c7ac63">CERTIFICAT</span><span style="font-style:normal;font-weight:bold;font-size:26pt;font-family:Swis721 Ex BT;color:#c7ac63"> </span><br/></SPAN></div>
        <div style="position:absolute;top:0.97in;left:3.14in;width:4.68in;line-height:0.48in;"><span style="font-style:normal;font-weight:bold;font-size:26pt;font-family:Swis721 Ex BT;color:#c7ac63">D’INVISTISSEMENT</span><span style="font-style:normal;font-weight:bold;font-size:26pt;font-family:Swis721 Ex BT;color:#c7ac63"> </span><br/></SPAN></div>
        </body>
        </html>                
        ';
        return $html;
    }    
}
