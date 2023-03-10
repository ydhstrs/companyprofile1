<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardBannerController;
use App\Http\Controllers\DashboardCvController;
use App\Http\Controllers\DashboardToolController;
use App\Http\Controllers\DashboardBioController;
use App\Http\Controllers\DashboardProjectController;
use App\Http\Controllers\DashboardStrengthController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\DashboardTestimonialController;
use App\Http\Controllers\DashboardAboutController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WorksController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/works', [WorksController::class, 'index']);
Route::get('/work/{project:slug}', [WorksController::class, 'show']);



Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('/dashboard/banner', DashboardBannerController::class);
    Route::resource('/dashboard/cv', DashboardCvController::class);
    Route::resource('/dashboard/tool', DashboardToolController::class);
    Route::resource('/dashboard/bio', DashboardBioController::class);
    Route::resource('/dashboard/project', DashboardProjectController::class);
    Route::post('image-upload', [ImageUploadController::class, 'storeImage'])->name('image.upload');
    Route::resource('/dashboard/strength', DashboardStrengthController::class);
    Route::resource('/dashboard/testimonial', DashboardTestimonialController::class);
    Route::resource('/dashboard/about', DashboardAboutController::class);
    Route::post('/dashboard/project/addToMain/{slug}', [DashboardProjectController::class, 'addToMain'])->name('project.addToMain');
    Route::post('/dashboard/project/delToMain/{slug}', [DashboardProjectController::class, 'delToMain'])->name('project.delToMain');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
