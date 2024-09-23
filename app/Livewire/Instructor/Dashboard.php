<?php

namespace App\Livewire\Instructor;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;

#[layout("layouts.app")]
#[title('LMS | Instructor')]

class Dashboard extends Component
{

    public function render()
    {
        return view('livewire.instructor.dashboard');
    }

    /**
     * computed property
     */
    public function getInstructor()
    {
    }
}
