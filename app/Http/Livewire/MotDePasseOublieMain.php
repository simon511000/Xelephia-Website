<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MotDePasseOublieMain extends Component
{
    public $email = '';
    
    public function submitEmail(){
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ], [
            'email.required' => 'Le champ email est requis',
            'email.string' => 'Veuillez insérer une adresse email valide',
            'email.email' => 'Veuillez insérer une adresse email valide',
        ]);
    }

    public function render()
    {
        return view('livewire.mot-de-passe-oublie-main');
    }
}
