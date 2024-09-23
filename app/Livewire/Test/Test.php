<?php

namespace App\Livewire\Test;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[layout("layouts.app")]
class Test extends Component
{
    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.test.test')->section("content");
    }

    public function count()
    {
        $this->count++;
    }
}
