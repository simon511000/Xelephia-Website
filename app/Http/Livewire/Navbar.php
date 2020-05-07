<?php

namespace App\Http\Livewire;

use App\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{


    protected $listeners = [
        'userLogged' => '$refresh',
        'userInscrit' => '$refresh'
    ];

    public function connected(){
        
    }

    public function render()
    {
        if(Auth::check()){
            $connected = true;
            $user = Auth::user();
        } else {
            $connected = false;
            $user = null;
        }

        return view('livewire.navbar', [
            'connected' => $connected,
            'user' => $user
        ]);
    }
}
