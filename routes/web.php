<?php

use App\Http\Controllers\backend\EducationController;
use App\Http\Controllers\backend\ProjectController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\SkillController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Main Option
    // Route::resource('/educations', EducationController::class);
    // Route::resource('/skills', SkillController::class);
    // Route::resource('/services', ServiceController::class);
    // Route::resource('/projects', ProjectController::class);

});

Route::get('/personal', function(){
    return view('backend.dashboard');
});
Route::get('/education', function(){
    return view('backend.education');
});
Route::get('/skills', function(){
    return view('backend.skill');
});
Route::get('/services', function(){
    return view('backend.service');
});
Route::get('/projects', function() {
    return view('backend.project');
});
Route::get('/portfolio', function() {
    return view('frontend.portfolio');
});

require __DIR__.'/auth.php';
