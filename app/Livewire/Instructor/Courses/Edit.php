<?php

namespace App\Livewire\Instructor\Courses;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

use App\Models\Course;
use Livewire\Attributes\Url;


#[title("Instructor | course | edit")]
#[Layout('layouts.app')]
class Edit extends Component
{
    private $id;
    private $course;

    public function mount($uid)
    {
        //decrypt the uid variable with laravel encrypter 
        $this->id = decrypt($uid);
        // $this->course = Course::find($this->uid);
        // $this->course;
    }


    public function render()
    {
        return view('livewire.instructor.courses.edit');
    }
}
