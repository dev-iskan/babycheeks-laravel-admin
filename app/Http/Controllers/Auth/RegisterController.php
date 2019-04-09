<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Resources\UserResource;
use App\User;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function __invoke(RegisterUserRequest $request)
    {
        $user = User::create($request->only('name', 'email', 'password'));
        return new UserResource($user);
    }
}
