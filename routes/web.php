<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\TechnewsController as TechnewsController;
use App\Models\Journal;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// GOOGLE SIGN IN AND AUTHENTICATION ROUTE
Route::controller(LoginController::class)->group(function () {
    Route::get('/auth/google', 'redirectToGoogle')->name('google.auth');
    Route::get('/auth/google-callback', 'handleGoogleCallback');
});


// ROUTE FOR HOME PAGE
Route::get('/', function (){
    return view('blogs', ['journals' => Journal::getAllJournals()]);
})->name('home');

// ROUTE FOR TECH NEWS PAGE
Route::get('/technews', function (){
    return view('technews', ['news' => News::getNewsString()]);
})->name('technews');

// ROUTE FOR CREATE JOURNAL PAGE
Route::view('/create', 'create-journal')->name('create');

// ROUTE FOR CREATE LOGIN PAGE
Route::view('/login', 'login')->name('login');

// ROUTE FOR AUTHORS LOGIN PAGE
Route::get('/authors', function (){
    return view('authors', ['curUser' => Auth::user(), 'authors' => User::getAllUsers()]);
})->name('authors');

// ROUTE FOR SAVING JOURNAL ENTRY IN THE DATABASE
Route::post('/createjournal', [JournalController::class, 'store'])->name('savejournal');

// ROUTE FOR DISPLAYING A SINGLE JOURNAL
Route::get('/journal/{id}', [JournalController::class, 'showSingleJournal']);

