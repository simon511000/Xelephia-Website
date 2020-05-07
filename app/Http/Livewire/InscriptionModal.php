<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class InscriptionModal extends Component
{
    public $name = '';

    public $email = '';

    public $password = '';

    public $passwordConfirm = '';

    private $validateMessages = [
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
        'password.min' => 'Le mot de passe doit avoir au minimum 8 caractères.'
    ];

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => ['string', 'max:30', 'unique:users'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password' => ['string', 'min:8']
        ], $this->validateMessages);
    }

    public function onSubmitForRegister(User $user)
    {
        $this->validate([
            'name' => ['required', 'string', 'max:30', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ], $this->validateMessages);

        if($this->password !== $this->passwordConfirm) $this->addError('password', 'Les mots de passes ne correspondent pas');

        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->save();

        $this->reset();

        $this->emit('userInscrit');

    }

    public function render()
    {
        return view('livewire.inscription-modal');
    }
}
