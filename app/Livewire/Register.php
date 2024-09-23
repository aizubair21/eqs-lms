<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Register extends Component
{
    public $is_agree = false;
    public $name;
    public $email;
    public $password;
    public $password_confirm;

    //make agree
    public function makeAgree()
    {
        $this->is_agree = !$this->is_agree;;
    }

    public function register()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:8',
        ]);

        // if ($validator->fails()) {
        //     $this->addError('email', 'The provided credentials are incorrect.');
        //     return;
        // }

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // event(new Registered($user));

        Auth::login($user, true);

        // return redirect()->intended('/dashboard');
        $this->redirectIntended("/dashboard", navigate: true);
    }

    public function render()
    {
        return view('livewire.register');
    }
}
