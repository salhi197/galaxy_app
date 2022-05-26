<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use App\Http\Requests\StoreUser;
use App\Wilaya;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profileUpdate(Request $request)
    {
        $user =User::find(Auth::user()->id);

        return redirect()->route('user.profile')->with('success', 'Success ');        
    }

    public function password(Request $request)
    {
        $user =User::find(Auth::user()->id);
        $user->password = Hash::make($request['password']);
        $user->password_text = $request['password'];
        $user->save();
        return redirect()->route('user.profile')->with('success', 'Success ');
        
    }

    public function index()
    {
        $users =User::all();
        return view('users.index',compact('users'));
    }

    public function getId(Request $request)
    {
        $user = User::where('code',$request['code'])->first();
        $id = $user->id ?? 0;
        $name = $user->name ?? 0;
        $response = array(
            'status' => 'success',
            'id' => $id,
            'name'=>$name
        );
        return response()->json($response); 
    }


    public function profile()
    {
        $user =User::find(Auth::user()->id);
        return view('users.profile',compact('user'));
    }

    public function partenaire()
    {
        $users =User::where('refered_user',Auth::user()->id)->get();
        return view('users.partenaires',compact('users'));
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
