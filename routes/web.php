<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('dashboard')
    ->middleware((['auth', 'verified', 'DashAcess']))
    ->as('dashboard.')
    ->group(function () {
        Route::get('/', function () {
            return view('dashboard');
        })->name('main');

        Route::resources([
            "users" => UserController::class,
            "skills" => SkillController::class,
            "settings" => SettingController::class,
            "projects" => ProjectController::class,
            "Professionals" => ProfessionalController::class,
            "messages" => MessagesController::class,
            "educations" => EducationController::class,
            "experiences" => ExperienceController::class,
        ]);
    });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/projects', [WorkController::class, 'index'])->name('projects');
Route::get('/contact', [ContactController::class, 'index'])->name('contacts');
Route::get('/resume', [ResumeController::class, 'index'])->name('resume');

Route::post('/contact_us', [ContactController::class, 'contactUsForm'])->name('contacts_us');

require __DIR__ . '/auth.php';
