<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'index']);

Route::get('/berita', [AppController::class, 'berita']);

Route::get('/berita/{id}', [AppController::class, 'isiBerita']);

Route::get('/foto', [AppController::class, 'foto']);

Route::get('/videos', [AppController::class, 'videos']);

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update')->middleware('auth');
Route::post('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth');

Route::get('/photo', [PhotoController::class, 'index'])->name('photo')->middleware('auth');
Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store')->middleware('auth');
Route::post('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update')->middleware('auth');
Route::post('/photo/destroy/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy')->middleware('auth');

Route::get('/video', [VideoController::class, 'index'])->name('video')->middleware('auth');
Route::post('/video/store', [VideoController::class, 'store'])->name('video.store')->middleware('auth');
Route::post('/video/update/{id}', [VideoController::class, 'update'])->name('video.update')->middleware('auth');
Route::post('/video/destroy/{id}', [VideoController::class, 'destroy'])->name('video.destroy')->middleware('auth');

Route::get('/register/success', [RegisterController::class, 'registerSuccess'])->name('register.success');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index')->middleware('auth');
Route::get('/register/create', [RegisterController::class, 'create'])->name('register.create');
Route::get('/register/user/create', [RegisterController::class, 'createUser'])->name('register.create.user');
Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');
Route::post('/register/user/store', [RegisterController::class, 'storeUser'])->name('register.store.user');
Route::get('/register/edit/{id}', [RegisterController::class, 'edit'])->name('register.edit');
Route::put('/register/update/{id}', [RegisterController::class, 'update'])->name('register.update');
Route::delete('/register/destroy/{id}', [RegisterController::class, 'destroy'])->name('register.destroy');
Route::get('/register/{id}', [RegisterController::class, 'show'])->name('register.show')->middleware('auth');
Route::get('/export', [RegisterController::class, 'export'])->name('register.export')->middleware('auth');