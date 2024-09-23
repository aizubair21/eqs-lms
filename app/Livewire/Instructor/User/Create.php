<?php

namespace App\Livewire\Instructor\User;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

#[layout("layouts.app")]
#[title("Instractor | users | add new")]
class Create extends Component
{

    #[validate("required")]
    public $username;

    public function render()
    {
        return view('livewire.instructor.user.create');
    }


    public function store()
    {
        $this->validate();
    }
}
