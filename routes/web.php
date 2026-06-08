<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\DashboardController;

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

Route::name('public.')->group(function () {

    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/about/{name}', [TeamController::class, 'index'])->name('about.team');

    Route::get('/veranstaltungen', [HomeController::class, 'events'])->name('events');
    Route::get('/spenden', [HomeController::class, 'donate'])->name('donate');
    Route::get('/kontakt', [HomeController::class, 'contact'])->name('contact');
    Route::get('/predigten', [HomeController::class, 'blog'])->name('blog');
    Route::get('/heferlcafe', [HomeController::class, 'heferlcafe'])->name('heferlCafe');
    
    Route::post('/predigten/stats/{post}/viewed', [HomeController::class, 'postAudioViewed'])->name('blog.post.viewed');
    Route::post('/predigten/stats/{post}/completed', [HomeController::class, 'postAudioCompleted'])->name('blog.post.completed');
    
    Route::get('/predigten/archiv', [HomeController::class, 'archive'])->name('blog.archive');

    Route::get('/impressum', [HomeController::class, 'imprint'])->name('imprint');
    Route::get('/datenschutz', [HomeController::class, 'privacy'])->name('privacy');

});

Route::name('dashboard.')->middleware(['auth:sanctum', 'verified'])->group(function () {


    Route::get("dashboard", [DashboardController::class, 'index'])->name('home');


    Route::resource("posts", PostController::class)->except("show");
    Route::post("posts/{post}/audio", [PostController::class, 'updateAudio'])->name('posts.audio');
    Route::post("posts/{post}/photo", [PostController::class, 'updatePhoto'])->name('posts.photo');

    Route::resource("news", NewsController::class)->except("show");
});


Route::fallback(function () {
    return Inertia::render('PageNotFound');
});
