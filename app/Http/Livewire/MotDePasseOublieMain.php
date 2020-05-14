<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

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

        $response = $this->broker()->sendResetLink(['email' => $this->email]);

        return $response == Password::RESET_LINK_SENT
                    ? $this->sendResetLinkResponse(['email' => $this->email], $response)
                    : $this->sendResetLinkFailedResponse(['email' => $this->email], $response);
    }

    protected function sendResetLinkResponse($response)
    {
        $this->emit('emailSendPassowrd', $response['email']);
    }

    protected function sendResetLinkFailedResponse($request, $response)
    {
        $this->addError('email', trans($response));
    }

    public function broker()
    {
        return Password::broker();
    }

    public function render()
    {
        return view('livewire.mot-de-passe-oublie-main');
    }
}
