<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use App\MethodeUser;
use App\Methode;
use App\Http\Requests\StoreUser;
use App\Wilaya;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function demande($user_id)
    {
        $user = User::find($user_id);
        $user->verified = 2;
        $user->save();
        return redirect()->route('user.profile')->with('success', 'Success ');        
        
    }
    public function profileUpdate(Request $request,$user_id)
    {
        $user =User::find($user_id);
        $user->pays = $request['pays']; 
        $user->nom = $request['nom']; 
        $user->name = $request['name']; 
        $user->email = $request['email']; 
        // $user->adress = $request['adress']; 
        $user->telephone = $request['telephone']; 

        $user->facebook = $request['facebook']; 
        $user->linkedin = $request['linkedin']; 
        $user->telegram = $request['telegram']; 
        if($request->hasFile('identite')) {
            $path = $request->file('identite')->store('/users/identite');
            $user->image = $path;
        }
        if($request->file('photo')) {
            $path = $request->file('photo')->store('/users/photo');
            $user->image = $path;
        }
        $user->save();

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

    public function detail($user_id)
    {
        $user =User::find($user_id);
        return view('users.detail',compact('user'));
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
        $nom = $user->nom ?? 0;
        
        $response = array(
            'status' => 'success',
            'id' => $id,
            'name'=>$name,
            'nom'=>$nom
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
    public function create()
    {
        return view('users.create');
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

    /**
     * 
     * 
     * 
     * GESTION DES METHODES DE PAIEMRNT
     * 
     */

    public function methodes()
    {
        $methodes = MethodeUser::where('user',Auth::user()->id)->get();
        $_methodes = Methode::all();
        
        return view('users.methodes',compact('methodes','_methodes'));
    }
    public function methodeUserCreate(Request $request)
    {
        $methodeUser = new MethodeUser();
        $methodeUser->user = Auth::user()->id;        
        $methodeUser->methode = $request['methode'];        
        $methodeUser->value = $request['value'];
        $methodeUser->save(); 
        
        return redirect()->route('user.methodes')->with('success', 'Suppresion Terminé ');
    
    }
    
    public function updateUserMethode(Request $request,$methode)
    {
        $methodeUser = MethodeUser::find($methode);
        $methodeUser->methode = $request['methode'];        
        $methodeUser->value = $request['value'];
        $methodeUser->save(); 
        
        return redirect()->route('user.methodes')->with('success', 'Suppresion Terminé ');

    }

    public function destroyUserMethode($methode)
    {
        $methodeUser = MethodeUser::find($methode);
        $methodeUser->delete();    
        return redirect()->route('user.methodes')->with('success', 'Suppresion Terminé ');
    }

}
