<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class OauthController extends Controller
{

    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallBack() {
        $userData = Socialite::driver('google')->user();

        $user = User::where('email', $userData->email)->first();

        if ($user != null) {
            if ($user->role_id == 1) {
                Auth::login($user);
                return redirect()->intended('admin/dashboard');
            } else if ($user->role_id == 2) {
                Auth::login($user);
                return redirect()->intended('account/dashboard');
            } else if ($user->role_id == 3) {
                Auth::login($user);
                return redirect()->intended('instructor/dashboard');
            }
        }  else {
            $user = User::create([
                'full_name' => $userData->name,
                'email' => $userData->email,
                'password' => Hash::make(Str::random(12)),
                'status' => 'active',
                'email_is_verified' => true,
                'email_verified' => time(),
                'profile_picture' => $userData->avatar,
                'provider_id' => truelm
            ]);
            Auth::login($user);
            if ($user->role_id == 2) {
                return redirect()->intended('/dashboard');
            }
        }
    }
}
