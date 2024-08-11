<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\User\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function login()
    {
        return view("auth.login");
    }

    public function authentication(LoginRequest $request)
    {
        $credential = $request->validated();

        if (Auth::attempt($credential))
        {
            $request->session()->regenerate();
            return redirect()->intended("/")->with("success", "Logged in.");
        }
    }

    public function register()
    {
        return view("auth.register");
    }

    public function completeAccount()
    {
        return view("auth.account");
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with("success", "Logged out.");
    }
}
