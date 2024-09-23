<?php

namespace App\Livewire\Test;

use Illuminate\Queue\Listener;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\On;

#[layout("layouts.app")]
class ClassAndObject extends Component
{

    public $get = "Data get form parent class";
    public $GData = "data";


    protected $listeners = ['refreshList' => '$refresh', 'catchUpdate' => 'catchUpdate'];

    public function render()
    {
        return view('livewire.test.class-and-object');
    }


    public function test()
    {
        // dd("updated");
        $this->GData = "get Data";
        // $this->dispatch("refresh");
    }

    // #[on('catchUpdate')]
    public function catchUpdate($data)
    {
        dd($data);
        $this->GData = $data;
    }
}
