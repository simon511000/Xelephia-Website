<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class ResetPasswordModal extends Component
{
    public $token;
    public $email;
    public $password;
    public $passwordConfirm;
    private $validateMessages = [
        'email.required' => 'Le champ email est requis',
        'email.string' => 'Veuillez insérer une adresse email valide',
        'email.email' => 'Veuillez insérer une adresse email valide',
        'email.max' => 'L\'adresse email doit être en dessous de 255 caractères.',
        'email.unique' => 'Cette adresse email a déjà été utilisée',
        'password.required' => 'Le champ mot de passe est requis',
        'password.string' => 'Veuillez insérer un mot de passe valide',
        'password.min' => 'Le mot de passe doit avoir au minimum 8 caractères.'
    ];

    public function mount($token, $email){
        $this->token = $token;
        $this->email = $email;

        session([
            'showResetPasswordLinkModel' => false
        ]);
    }

    public function submitReset()
    {
        $this->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ], $this->validateMessages);

        if($this->password !== $this->passwordConfirm){
            $this->addError('password', 'Les mots de passes ne correspondent pas');
        }

        $request = [
            'token' => $this->token,
            'email' => $this->email,
            'password' => $this->password
        ];

        $response = $this->broker()->reset(
            $request, function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $response == Password::PASSWORD_RESET
                    ? $this->sendResetResponse($response)
                    : $this->sendResetFailedResponse($response);

    }

    protected function resetPassword($user, $password)
    {
        $user->password = $password;

        $user->setRememberToken(Str::random(60));

        $user->save();

        event(new PasswordReset($user));

        Auth::guard()->login($user);
    }

    protected function sendResetResponse($response)
    {
        $this->emit('passwordReseted');
        $this->emit('userLogged', true);
    }

    protected function sendResetFailedResponse($response)
    {
        $this->addError('password', trans($response));
    }

    public function broker()
    {
        return Password::broker();
    }

    public function render()
    {
        return view('livewire.reset-password-modal');
    }
}
