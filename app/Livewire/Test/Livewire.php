<?php

namespace App\Livewire\Test;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[layout("layouts.app")]
class Livewire extends Component
{
    public function render()
    {
        return view('livewire.test.livewire')->section("content");
    }
}
