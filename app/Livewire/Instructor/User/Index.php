<?php

namespace App\Livewire\Instructor\User;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[title("Instructor | Users | Index")]
#[layout("layouts.app")]
class Index extends Component
{
    public function render()
    {
        return view('livewire.instructor.user.index');
    }
}
