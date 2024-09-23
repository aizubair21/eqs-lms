<?php

namespace App\Livewire\Instructor\Courses;

use App\Http\Controllers\CourseController;
use App\Models\course;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

#[title("Instructor - add new course")]
#[layout("layouts.app")]
class Create extends Component
{
    public $navArray = ['home', 'instructor', 'content', 'published', 'seo'];
    // public $count = 0;
    public $nav = "home";
    public $target;
    private $isTarget = "1";


    // home step 
    public $title;
    public $info;
    public $description;
    public $price;
    public $discount;

    public $image;

    /***
     * 
     */
    public function nextTab($tabname)
    {
        // dd($tabname);
        $this->nav = $tabname;
        // $sn = array([
        //     'message' => $tabname,
        //     'status' => 'success',
        // ]);


        // flash a session array 
        // Session::flash('wire_error', $sn);
        // $this->count++;
    }

    // public function __get($target)
    // {
    //     return $target;
    // }

    // public function update($nav)
    // {
    //     dd($nav);
    //     $this->target = $this->isTarget ? true : false;
    // }


    /***
     * 
     */
    public function submit()
    {
        // dd(['home']);
        // $this->count = $this->description;
        switch ($this->nav) {
            case 'home':
                $this->homStep();
                break;

            case 'content':
                $this->contentStep();
                break;

            case 'instructor':
                $this->instructorStep();
                break;

            case 'seo':
                $this->seoStep();
                break;

            default:
                // $this->count++;
                $this->publishedStep();
                break;
        }
    }


    private function homStep()
    {

        //validate data
        $validatedData = $this->validate([
            'title' => 'required',
            'description' => 'required',
            'info' => 'required',
            'price' => 'required',
            'discount' => '',
        ]);

        // if validated 
        if ($validatedData) {
            // dd($validatedData);
            // call the courseController store method
            // $cc = new CourseController;
            // dd($cc->store($validatedData));
            // $redirect = $cc->store($validatedData)->getTargetUrl();
            // $this->redirectIntended($redirect, true);

            course::create($validatedData);
            $this->redirectIntended(route("instructorCourse.edit"), true);
        }
    }
    private function contentStep()
    {
        dd(__FUNCTION__);
    }
    private function instructorStep()
    {
        dd(__FUNCTION__);
    }
    private function seoStep()
    {
        dd(__FUNCTION__);
    }
    private function publishedStep()
    {
        dd(__FUNCTION__);
    }

    public function render()
    {
        //return with url form data
        $this->target = $this->isTarget ? true : false;

        return view('livewire.instructor.courses.create');
    }
}
