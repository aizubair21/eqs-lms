<?php

namespace App\Livewire\Test\Component;

use Livewire\Attributes\Modelable;
use Livewire\Component;
use Livewire\Attributes\Reactive;

class ReactiveComponent extends Component
{

    // #[Reactive]
    public $GData = "reactive child element";


    public function render()
    {
        return view('livewire.test.component.reactive-component')->section("content");
    }


    public function update()
    {
        dd($this->all());
    }


    public function check()
    {
        $this->dispatch("catchUpdate", $this->GData);
    }
}
