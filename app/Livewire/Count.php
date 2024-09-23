<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[layout("layouts.app")]
class Count extends Component
{
    public $counter = 1;


    public function addition()
    {
        $this->counter++;
    }
    public function substr()
    {
        $this->counter--;
    }

    public function render()
    {
        return view('livewire.count');
    }
}
