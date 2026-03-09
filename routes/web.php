<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
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


Route::middleware(['portfolio.access'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/skills', [SkillController::class, 'index'])->name('skills');
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
    Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
});