<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request){
        $data = $request->all();
        $data['id'] = (string) Str::uuid();

        $data['password'] = password_hash($data['mdp'], PASSWORD_DEFAULT);

        $user = User::create($data);
        if($user != null){
            session()->put('user', collect([
                'id' => $user->id,
                'username' => $data['username'],
                'email' => $data['email']
            ]));
            return redirect()->route('home.page')->with('success', "Bienvenue sur Last Level Event. Profitez pleinement de notre sélection d'événements passionnants. Bonne expérience !");
        }else{
            dd('erreur');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request  $request){

        $data = $request->all();
        $user = User::where('email', '=', $data['email'])->first();
        if($user != null){

            if(password_verify($data['password'], $user->password)){
                session()->put('user', collect([
                    'id' => $user->id,
                    'username' => $user->username,
                    'email' => $data['email']
                ]));
                return redirect()->route('home.page')->with('success', "Connexion réussie. Bienvenue !");
            }else{
                return redirect()->route('login.page')->with('error', "Les identifiants saisis sont incorrects.")->withInput();
            }

        }else{
            return redirect()->route('login.page')->with('error', "Les identifiants saisis sont incorrects.")->withInput();
        }
    }
}
