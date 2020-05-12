<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ConnexionModal extends Component
{
    public $email = '';

    public $password = '';

    public function onSubmitForLogin()
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ], [
            'email.required' => 'Le champ email est requis',
            'email.string' => 'Veuillez insérer une adresse email valide',
            'email.email' => 'Veuillez insérer une adresse email valide',
            'password.required' => 'Le champ mot de passe est requis',
            'password.string' => 'Veuillez insérer un mot de passe valide',
        ]);

        if(Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ])){
            // Connecté
            $this->emit('userLogged');
        } else {
            $this->emit('loginFalse');
        }

    }

    public function motDePasseOublie(){
        $this->emit('passwordForget');
    }

    public function render()
    {
        return view('livewire.connexion-modal');
    }
}
