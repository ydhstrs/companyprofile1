<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardBannerController;
use App\Http\Controllers\DashboardCvController;
use App\Http\Controllers\DashboardToolController;
use App\Http\Controllers\DashboardBioController;
use App\Http\Controllers\DashboardArticleController;
use App\Http\Controllers\DashboardStrengthController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\DashboardTestimonialController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashboardAboutController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FoundationController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndomarketController;
use App\Http\Controllers\KepulController;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\SaramodaController;
use App\Http\Controllers\LegalinController;
use App\Http\Controllers\BarbekoeController;
use App\Http\Controllers\IndopropertiController;
use App\Http\Controllers\DashboardMainSectionController;
use App\Http\Controllers\DashboardMainListSectionController;
use App\Http\Controllers\DashboardLegalinSectionController;
use App\Http\Controllers\DashboardLegalinListSectionController;
use App\Http\Controllers\DashboardFoundationSectionController;
use App\Http\Controllers\DashboardFoundationListSectionController;
use App\Http\Controllers\DashboardBarbekoeSectionController;
use App\Http\Controllers\DashboardBarbekoeListSectionController;
use App\Http\Controllers\DashboardKepulListSectionController;
use App\Http\Controllers\DashboardKepulSectionController;

use App\Http\Controllers\TechnologyController;

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
Route::get('/foundation', [FoundationController::class, 'index']);
Route::get('/kepul', [KepulController::class, 'index']);
Route::get('/technology', [TechnologyController::class, 'index']);
Route::get('/saramoda', [SaramodaController::class, 'index']);
Route::get('/legalin', [LegalinController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/works', [WorksController::class, 'index']);
Route::get('/indomarket', [IndomarketController::class, 'index']);
Route::get('/indoproperti', [IndopropertiController::class, 'index']);
Route::get('/work/{project:slug}', [WorksController::class, 'show']);



Route::get('/barbekoe', [BarbekoeController::class, 'index']);


Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('/dashboard/banner', DashboardBannerController::class);
    Route::resource('/dashboard/cv', DashboardCvController::class);
    Route::resource('/dashboard/tool', DashboardToolController::class);
    Route::resource('/dashboard/bio', DashboardBioController::class);
    Route::resource('/dashboard/article', DashboardArticleController::class);
    Route::post('image-upload', [ImageUploadController::class, 'storeImage'])->name('image.upload');
    Route::resource('/dashboard/strength', DashboardStrengthController::class);
    Route::resource('/dashboard/main/section', DashboardMainSectionController::class);
    Route::resource('/dashboard/main/listsection', DashboardMainListSectionController::class);
    Route::resource('/dashboard/testimonial', DashboardTestimonialController::class);
    Route::resource('/dashboard/contact', DashboardContactController::class);
    // Route::post('/dashboard/project/addToMain/{slug}', [DashboardProjectController::class, 'addToMain'])->name('project.addToMain');
    // Route::post('/dashboard/project/delToMain/{slug}', [DashboardProjectController::class, 'delToMain'])->name('project.delToMain');
    Route::resource('/dashboard/legalin/section', DashboardLegalinSectionController::class);
    Route::resource('/dashboard/legalin/listsection', DashboardLegalinListSectionController::class);
    Route::resource('/dashboard/foundation/section', DashboardFoundationSectionController::class);
    Route::resource('/dashboard/foundation/listsection', DashboardFoundationListSectionController::class);
    Route::resource('/dashboard/barbekoe/section', DashboardBarbekoeSectionController::class);
    Route::resource('/dashboard/barbekoe/listsection', DashboardBarbekoeListSectionController::class);
    Route::resource('/dashboard/kepul/section', DashboardKepulSectionController::class);
    Route::resource('/dashboard/kepul/listsection', DashboardKepulListSectionController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
