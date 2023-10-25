<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        // Handle user registration or login
        $googleUser = Socialite::driver('google')->user();

        // Check if the user already exists in database
        $user = User::all()->where('email', $googleUser->email)->first();

        // // Check if the user already exists in database    
        if (!$user) {
            // If the user doesnt exist, create a new user record
            $user = User::createNewUser($googleUser->name, $googleUser->email, $googleUser->avatar);
        }

        Auth::login($user);
        return redirect('/');
    }
}
