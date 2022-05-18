<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Hash;
use App\Http\Requests\StoreUser;
use App\Wilaya;

class UserController extends Controller
{
    public function index()
    {
        // user sginife commercial
        $users =User::all();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->get('nom_prenom');
        $user->grade = $request->get('grade');
        $user->email = $request->get('email') ?? 'vide';
        $user->password = Hash::make($request->get('password'));
        $user->password_text = $request->get('password');
        if ($request->hasFile('identite')) {
            $livreur->identite = $request->file('identite')->store(
                'users/identite',
                'public'
            );
        }

        $user->save();
        return redirect()->route('user.index')->with('success', 'Inséré avec succés ');
    }  
    public function edit($id_user)
    {
        $user = User::find($id_user);
        return view('users.edit',compact('user'));
    }

    public function update(Request $request,$id_user)
    {
        $user = User::find($id_user);
        $user->name = $request->get('nom_prenom');
        $user->grade = $request->get('grade');
        $user->email = $request->get('email') ?? 'vide';
        $user->password = Hash::make($request->get('password'));
        $user->password_text = $request->get('password');
        if ($request->hasFile('identite')) {
            $livreur->identite = $request->file('identite')->store(
                'users/identite',
                'public'
            );
        }

        $user->save();
        return redirect()->route('user.index')->with('success', 'Inséré avec succés ');

    }

    
    public function destroy($id_user)
    {
        $user = User::find($id_user);
        $user->delete();    
        return redirect()->route('user.index')->with('success', 'Suppresion Terminé ');
    }

}
