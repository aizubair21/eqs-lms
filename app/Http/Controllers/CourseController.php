<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CourseController extends Controller
{

    // index function. reutrn all of courses from database
    public function index()
    {
        $courses = course::all();
    }


    //store course details
    public function store($data, $isFromComponent = false)
    {
        // return redirect()->route("instructorCourse.index");
        // return redirect()->back()->with(["status" => "success"]);
        $optionalData = array(
            'slug' => Str::slug($data['title']),
            'instructor' => auth()->user()->id,
        );
        array_push($data, $optionalData);
        course::create($data);
        if (!$isFromComponent) {
        }
    }

    // edit function. return targeted courses from database. 
    // this function also for showing courses data
    public function edit(Course $course)
    {
        return $course;
    }


    // destroy 
    public function destroy($ecnrypted_id)
    {
        $id = decrypt($ecnrypted_id);
        // $course = course::find($id);

        // check the permission to delete the course

        DB::table("course")->when(Auth::check())->where("id", "=", $id)->delete();
        // $course->delete();
        return redirect()->back()->with(["status" => "success"]);
    }
}
