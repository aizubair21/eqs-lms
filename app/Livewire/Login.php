<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Livewire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Validate;

class Login extends Component
{
    //required field
    // #[Validate('required')]
    public $password;

    // #[Validate('required')]
    public $email;


    public function render()
    {
        return view('livewire.login')->extends("layouts.app");
    }

    public function login()
    {
        // Cache::get();
        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // $this->validate();
        if (Auth::attempt($this->all(), true)) {
            $this->reset();
            // Authentication was successful
            // return redirect()->intended('/dashboard');
            $this->redirectIntended("/", navigate: true);
        } else {
            // Authentication failed
            $this->addError('email', 'Invalid email or password');
        }
    }
}
