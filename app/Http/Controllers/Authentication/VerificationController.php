<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\UserVerify;
use Illuminate\Support\Str;


class VerificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('throttle:6,1')->only('resend');
    }

    public function index()
    {
        return view('authentication.verify');
    }

    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();

        if (!is_null($verifyUser)) {
            $user = $verifyUser->users;
            if (!$user->is_email_verified) {
                $verifyUser->users->is_email_verified = 1;
                $verifyUser->users->email_verified_at = time();
                $verifyUser->users->status = 'active';
                $verifyUser->users->save();
                return view('authentication.login')->with('success', 'Your e-mail is verified. You can now login.');
            } else {
                return view('authentication.login')->with('success', 'Your e-mail is already verified. You can now login.');
            }
        }
        return view('authentication.login')->with('error', 'Email cannot be identified');
    }

    public function resendVerify(Request $request, $token)
    {

        // create user account
        $verifyUser = UserVerify::where('token', $token)->first();
        $token = Str::random(64);

        UserVerify::create([
            'user_id' => $verifyUser->users->user_id,
            'token' => $token
        ]);

        // send email to verification
        $this->sendActivationEmail($request, $token);
//        $body = [
//            'email' => $user->email,
//            'token' => $token
//        ];
//
//        $user = UserVerify::where('token', $token)->first();
//
//        $request->user->sendActivationEmail();
//        return back()->with('message', 'Verification link sent!');
    }

}
