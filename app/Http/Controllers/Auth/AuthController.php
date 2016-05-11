<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Sentry;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
   public function login(LoginRequest $request)
   {
        $username = $request->username;
        $password = $request->password;

        $user = Sentry::authenticate($request->all(), false);

        if (Sentry::check()) {
            return [
                'thanks for logging in'
            ];
        }

        return [
            'User Credentials Error'
        ];
   }
}
