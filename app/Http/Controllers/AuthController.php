<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests\LoginRequest;
use App\Jobs\AuthenticateUser;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $login = $this->dispatch(new AuthenticateUser(
                        $request->all()
                    ));

        return $login;
    }

    public function logout()
    {
        Auth::logout();
    }
}
