<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminLoginStoreRequest;
use App\Models\User;
use App\Service\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function create()
    {
        return view('layouts.index');
        // return view('user.create');
    }

    public function list()
    {
        return view('layouts.index');
    }

    public function form()
    {
        return view('user.form');
    }

    public function store(AdminLoginStoreRequest $request)
    {
        $this->userService->store($request->validated());
        return redirect(RouteServiceProvider::HOME);
    }
}
