<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompleteAccountRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Services\User\UserService;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function create(RegisterRequest $request)
    {
        $user = $this->userService->create($request->validated());

        Auth::login($user);

        return redirect('/')->with("success", "New account created. \nComplete your account now!");
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = $this->userService->update(auth()->user()->id, $request->validated());
        if ($user) {
            return redirect()->back()->with("success", "Profile updated");
        }
    }

    public function completeAccount(CompleteAccountRequest $request)
    {
        $user = $this->userService->update(auth()->user()->id, $request->validated());
        if ($user) {
            return redirect(route("dashboard"))->with("success", "Account completed.");
        }
    }
}
