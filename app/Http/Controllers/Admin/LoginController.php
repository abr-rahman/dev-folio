<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginStoreRequest;
use App\Http\Requests\AdminRegisterRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Admin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Service\UserService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Validator;

class LoginController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function login(): View
    {
        return view('admin.auth.login');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(AdminLoginStoreRequest $request)
    // {
    //     $this->userService->store($request->validated());
    //     return redirect(RouteServiceProvider::HOME);
    // }

    public function store(AdminLoginStoreRequest $request)
    {
        $this->userService->store($request->validated());
        return redirect(RouteServiceProvider::HOME);
    }
}
