<?php

namespace App\Livewire\Instructor\Courses;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[title('Instructor - course index')]
#[layout('layouts.app')]
class Index extends Component
{
    public $isDetailsModal = "show";
    public function render()
    {
        return view('livewire.instructor.courses.index');
    }
}
