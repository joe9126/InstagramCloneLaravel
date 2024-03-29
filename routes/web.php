<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
   
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /**
     * Post Routes
     */
    Route::get('/p/create', [PostsController::class, 'create'])->name('posts.create');
    Route::post('p',[PostsController::class, 'store'])->name('post.store');
    Route::get('/p/{id}',[PostsController::class, 'show'])->name('post.show');
});
Route::get('/profile/{user}',[ProfileController::class,'index'])->name('profile.show');
Route::get('/prof/{user}/edit', [ProfileController::class,'profedit'])->name('prof.edit');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('index');


