<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\course;
use App\Models\course_module;
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
    return redirect()->route('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::post("/courses", function () {
    $courses = course::find(2)->withRelations;
    return $courses;
})->name("courses");

Route::post("/course/{id}", function ($id) {
    $data = course::find($id)->withRelations;
    return $data;
});

Route::post("/users", function () {
    return User::all();
});

Route::post("instructor/{id}/courses/", function ($id) {
    $data = User::find($id)->withRelations;
    return $data;
});

// Route::post("instructor/{id}/courses/{id}", function ($id) {
//     $data = User::find($id)->withRelations;
//     return $data;
// });

Route::get("/csrf-token", function () {
    return  csrf_token();
})->name("csrf-token");

Route::get("/test", function () {
    return course_module::pluck("id")->toArray();
});
