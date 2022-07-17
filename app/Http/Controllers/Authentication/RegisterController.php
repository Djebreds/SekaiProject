<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Mail\verificationEmail;
use App\Models\Role;
use App\Models\User;
use App\Models\UserVerify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('authentication.register');
    }

    public function registered(Request $request)
    {
        // validate the request
        $validate = $request->validate([
            'full_name' => 'required|string|min:3|max:50',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        // select the default role
        $role = Role::select('role_id')->where('role_name', 'student')->first();

        // create user account
        $user = User::create([
            'full_name' => $validate['full_name'],
            'email' => $validate['email'],
            'password' => Hash::make($validate['password']),
            'role_id' => $role->role_id
        ]);

        $token = Str::random(64);
        UserVerify::create([
            'user_id' => $user->user_id,
            'token' => $token
        ]);
        // send email to verification
        $this->sendActivationEmail($request, $token);
        $body = [
            'email' => $user->email,
            'token' => $token
        ];

//        return redirect()->route('verify.user', $token)->with(compact('body'));
        return redirect()->route('verify.index')->with(compact('body'));
    }

    public function sendActivationEmail($request, $token)
    {
        $details = [
            'title' => 'Verification Email',
            'token' => $token,
            'username' => $request->full_name,
        ];
        Mail::to($request->email)->send(new VerificationEmail($details));
    }
}
