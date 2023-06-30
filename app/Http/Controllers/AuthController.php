<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
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

        $validators = Validator::make($request->all(), [
            'username' => 'required|min:3|unique:users',
            'lastname' => 'required|min:3',
            'name' => 'required|min:3',
            'email' => 'required|email:rfc,dns|unique:users',
            'phone' => 'required|regex:/^\+243[ _-]?([0-9]{3}[ _-]?){3}$/',
            'address' => 'required|min:10',
            'mdp' => 'required|min:6|required_with:mdp_confirmation|confirmed',
            'mdp_confirmation' => 'required|min:6|same:mdp_confirmation',
        ]);
        $errors = $validators->errors();
        if($validators->fails()){
            return back()->withErrors($errors)->withInput();
        }
        $data = $request->all();
        $data['id'] = (string) Str::uuid();

        if($data['mdp'] != $data['mdp_confirmation']){
            return redirect()->back()->with('error', "Mot de passe inconrect");
        }

        $data['password'] = password_hash($data['mdp'], PASSWORD_DEFAULT);

        $user = User::create($data);
        if($user != null){
            session()->put('user', collect([
                'id' => $user->id,
                'username' => $data['username'],
                'email' => $data['email']
            ]));
            return redirect()->back()->with('success', "Félicitations pour la création de votre compte ! Veuillez consulter votre boîte de réception et activer votre compte en cliquant sur le lien d'activation qui vous a été envoyé par e-mail. Profitez de toutes les fonctionnalités de notre site une fois votre compte activé. Bienvenue parmi nous !");
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
        $validators = Validator::make($request->all(), [
            'email' => 'required|email:rfc,dns|exists:users,email',
            'password' => 'required|min:6',
        ]);
        $errors = $validators->errors();
        if($validators->fails()){
            return back()->withErrors($errors)->withInput();
        }
        $data = $request->all();
        $user = User::where('email', '=', $data['email'])->first();
        if($user != null){

            if(password_verify($data['password'], $user->password)){

                if ($user->is_active){
                    session()->put('user', collect([
                        'id' => $user->id,
                        'username' => $user->username,
                        'email' => $data['email']
                    ]));
                    return redirect()->route('home.page')->with('success', "Connexion réussie. Bienvenue !");
                }else{
                    return redirect()->route('login.page')->with('info', "Votre compte n'est pas actif. Veuillez vérifier votre boîte de réception pour activer votre compte en cliquant sur le lien d'activation qui vous a été envoyé par e-mail. Si vous avez des questions, veuillez contacter notre équipe d'assistance. Merci !");
                }

            }else{
                return redirect()->route('login.page')->with('error', "Les identifiants saisis sont incorrects.")->withInput();
            }

        }else{
            return redirect()->route('login.page')->with('error', "Les identifiants saisis sont incorrects.")->withInput();
        }
    }

    /**
     * @param User $user
     */
    public function activeAccount(User $user){
        $user->is_active = true;
        if($user->save()){
            return redirect()->route('login.page')->with('success', "Votre compte a été activé avec succès ! Vous pouvez maintenant vous connecter et profiter de toutes les fonctionnalités de notre site. Bienvenue !");
        }else{
            return redirect()->route('home.page')->with('error', "Désolé, un problème est survenu lors de l'activation de votre compte. Veuillez contacter notre équipe d'assistance pour obtenir de l'aide. Nous nous excusons pour les désagréments occasionnés.");
        }
    }
}
