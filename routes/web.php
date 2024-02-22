<?php

<<<<<<< HEAD
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DealController;
use App\Http\Controllers\ContactController;
Route::get('/deals/{deal}', [DealController::class, 'show'])->name('deals.show');
Route::get('/deals/{deal}', [DealController::class, 'edit'])->name('deals.edit');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
=======
use Illuminate\Support\Facades\Route;

>>>>>>> 8dbaf2f2f7ab6ec24159cc8d6a65dc7aef6e4bc8
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
});

<<<<<<< HEAD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('deals', DealController::class);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('deals.show', DealController::class);
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('contact', ContactController::class);
});

require __DIR__.'/auth.php';
=======
use App\Http\Controllers\PostController; // Import the PostController

Route::get('/', function () {
    return view('welcome');
});

// Define routes for posts
Route::resource('posts', PostController::class);

>>>>>>> 8dbaf2f2f7ab6ec24159cc8d6a65dc7aef6e4bc8
