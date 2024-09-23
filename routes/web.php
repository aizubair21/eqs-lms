<?php

use App\Http\Controllers\CourseController;
use App\Livewire\Count;
use App\Livewire\Instructor\Courses\Create;
use App\Livewire\Instructor\Courses\Index as courseIndex;
use App\Livewire\Instructor\Courses\Edit as courseEdit;


use App\Livewire\Instructor\User\Index as userIndex;
use App\Livewire\Instructor\User\Update as userUpdate;
use App\Livewire\Instructor\User\Create as userCreate;

use App\Livewire\Instructor\Dashboard as instructorDashboard;
use App\Livewire\Test\ClassAndObject;
use App\Livewire\Test\Test;
use App\Livewire\Test\Livewire as livewireTest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;
use App\Models\User;
use App\Models\course;
use App\Models\course_module;
use Livewire\Livewire;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view("home");
    return redirect()->route('instructorCourse.index');
});

// $authUserName = auth()->user()->name;
// dd(Auth::forgetUser());
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->prefix('/lms/ins/')->group(function () {

    Route::get('/lms', instructorDashboard::class)->name('dashboard');




    // Route::post("/courses", function () {
    //     $courses = course::find(2)->withRelations;
    //     return $courses;
    // })->name("courses");
    Route::get("/course", courseIndex::class)->name("instructorCourse.index");
    Route::get("/course/add", Create::class)->name("instructorCourse.create");
    Route::get("/course/{uid}", courseEdit::class)->name("instructorCourse.edit");

    // Route::post("/course/{id}", function ($id) {
    //     $data = course::find($id)->withRelations;
    //     return $data;
    // });

    Route::get("/users", userIndex::class)->name("instructorUsers.index");
    Route::get("/users/create", userCreate::class)->name("instructorUsers.create");
    Route::get("/users/update", userUpdate::class)->name("instructorUsers.update");
    // Route::post("/users/update", userUpdate::class)->name("instructorUsers.update");
    // Route::get("/users/course", userUpdate::class)->name("instructorUsers.course");
    // Route::get("/users/course/view", userUpdate::class)->name("instructorUsers.course/view");

    Route::post("instructor/{id}/courses/", function ($id) {
        $data = User::find($id)->withRelations;
        return $data;
    });

    // Route::post("instructor/{id}/courses/{id}", function ($id) {
    //     $data = User::find($id)->withRelations;
    //     return $data;
    // });

    Route::get("/get/token", function () {
        return  csrf_token();
    })->name("csrf-token");

    Route::get(
        "/test",
        // return course_module::pluck("id")->toArray();
        // Test::class
        // function () {
        //     return blade::render(
        //         'My name {{$name}}',
        //         ["name" => "zubair"]
        //     );
        // }

        function () {

            return view("_Test.test");
        }
    )->name("test.blade");


    Route::get(
        "/test/livewire",
        livewireTest::class,
    )->name("test.livewire");
    Route::get(
        "/test/class",
        ClassAndObject::class,
    )->name("test.class");


    //ocunter 
    Route::get("/counter", Count::class)->name("counter");
});
