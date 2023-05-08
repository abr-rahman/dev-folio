<?php

namespace App\Service;

use App\Repository\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function store(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return $this->userRepository->insert($data);
    }
}
