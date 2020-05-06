<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request){
        
        // Validation
        $v = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:30', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'name.required' => 'Le champ pseudo est requis',
            'name.string' => 'Veuillez insérer un pseudo valide',
            'name.max' => 'Le pseudo doit être en dessous de 30 caractères',
            'name.unique' => 'Ce pseudo a déjà été utilisé',
            'email.required' => 'Le champ email est requis',
            'email.string' => 'Veuillez insérer une adresse email valide',
            'email.email' => 'Veuillez insérer une adresse email valide',
            'email.max' => 'L\'adresse email doit être en dessous de 255 caractères.',
            'email.unique' => 'Cette adresse email a déjà été utilisée',
            'password.required' => 'Le champ mot de passe est requis',
            'password.string' => 'Veuillez insérer un mot de passe valide',
            'password.min' => 'Le mot de passe doit avoir au minimum 8 caractères.',
            'password.confirmed' => 'Les mots de passes ne correspondent pas'
        ]);
        
        if($v->fails()){
            return response()->json([
                'status' => 'error',
                'errors' => $v->errors()
            ], 422);
        }

        // Inscription
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        
        return response()->json([
            'status' => 'success',
            'toast' => [
                'title' => 'Inscrit!',
                'message' => 'Bienvenue sur Xelephia!',
                'position' => 'topCenter',
                'titleColor' => '#f6861a',
            ]
            ], 200);
    }

    public function login(Request $request){

        // Validation
        $v = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ], [
            'email.required' => 'Le champ email est requis',
            'email.string' => 'Veuillez insérer une adresse email valide',
            'email.email' => 'Veuillez insérer une adresse email valide',
            'password.required' => 'Le champ mot de passe est requis',
            'password.string' => 'Veuillez insérer un mot de passe valide',
        ]);
        
        if($v->fails()){
            return response()->json([
                'status' => 'error',
                'errors' => $v->errors()
            ], 422);
        }

        // Tentative de connexion
        $credentials = $request->only('email', 'password');

        if($token = $this->guard()->attempt($credentials)){
            // Connecté
            return response()->json([
                'status' => 'success',
                'toast' => [
                    'title' => 'Connecté!',
                    'message' => 'Ravis de vous revoir!',
                    'position' => 'topCenter',
                    'titleColor' => '#f6861a',
                ]
                ], 200);
        }

        // email ou mot de passe invalide
        return response()->json([
            'status' => 'login-error',
        ], 401);
    }

    public function logout()
    {
        $this->guard()->logout();

        return response()->json([
            'status' => 'success',
            'toast' => [
                'title' => 'Déconnecté!',
                'position' => 'topCenter',
                'titleColor' => '#f6861a',
            ]
        ], 200);
    }

    public function user(Request $request)
    {
        $user = User::find(Auth::user()->id);

        return response()->json([
            'status' => 'success',
            'data' => $user
        ]);
    }

    public function refresh()
    {
        if ($token = $this->guard()->refresh()) {
            return response()
                ->json(['status' => 'successs'], 200)
                ->header('Authorization', $token);
        }

        return response()->json(['error' => 'refresh_token_error'], 401);
    }

    private function guard()
    {
        return Auth::guard();
    }
}
