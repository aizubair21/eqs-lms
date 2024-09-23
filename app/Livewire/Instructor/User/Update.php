<?php

namespace App\Livewire\Instructor\User;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;

#[title("Instructor | Users | Update")]
#[layout("layouts.app")]
class Update extends Component
{
    public $get = 1;
    public function render()
    {
        return view('livewire.instructor.user.update');
    }
}
