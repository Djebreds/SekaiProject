<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\UserVerify;
use Carbon\Carbon;

class VerificationController extends Controller
{
    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();
        $message = 'Email cannot be identified';

        if (!is_null($verifyUser)) {
            $user = $verifyUser->users;
            if (!$user->is_email_verified) {
                $verifyUser->users->is_email_verified = 1;
                $verifyUser->users->email_verified_at = Carbon::now();
                $verifyUser->users->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }
        return redirect()->route('login')->with('message', $message);
    }
}
