<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courses;
class CourseController extends Controller
{
    
    // index function. reutrn all of courses from database
    public function index() 
    {
        $courses = courses::all();
    }

    // edit function. return targeted courses from database. 
    // this function also for showing courses data
    public function edit(Course $course)
    {
        return $courses;
    }

}