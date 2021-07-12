<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function index()
    {
        if (!request()->get('token') || !request()->get('email')) {
            return "False";
        }

        return view(
            'auth.passwords.reset',
            [
                'token' => request()->get('token'),
                'email' => request()->get('email'),
            ]
        );
    }

    public function forgot() {
        $credentials = request()->validate(['email' => 'required|email']);
        Password::sendResetLink($credentials);

        return response()->json(["msg" => 'Reset password link sent on your email id.']);
    }

    public function reset() {
        $credentials = request()->validate([
            'email' => 'required|email',
            'token' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

        $reset_password_status = Password::reset($credentials, function ($user, $password) {
            $user->password = Hash::make($password);
            $user->save();
        });

        $message = ($reset_password_status == Password::INVALID_TOKEN) ? "Token không tồn tại."
            : "Thay đổi mật khẩu thành công";

        return view('redirect', ['message' => $message]);
    }
}
