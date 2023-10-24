<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\JournalController;
use App\Models\Journal;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function (){
    return view('blogs', ['journals' => Journal::getAllJournals()]);
})->name('home');

Route::view('/login', 'login')->name('login');

Route::view('/create', 'create-journal')->name('create');

Route::get('/authors', function (){
    return view('authors', ['curUser' => Auth::user(), 'authors' => User::getAllUsers()]);
});

Route::post('/createjournal', [JournalController::class, 'store'])->name('savejournal');

Route::get('/journal/{id}', [JournalController::class, 'showSingleJournal']);

Route::controller(LoginController::class)->group(function () {
    Route::get('/auth/google', 'redirectToGoogle')->name('google.auth');
    Route::get('/auth/google-callback', 'handleGoogleCallback');
});

// Route::controller(JournalController::class)->group(function () {
//     Route::post('/createjournal', 'store')->name('savejournal');
// });
