<?php

namespace App\Repository;

use App\Models\Admin;
use App\Models\User;

class UserRepository
{
    private $user;

    public function __construct(Admin $user)
    {
        $this->user = $user;
    }

    public function insert($data)
    {
        return $this->user->create($data);
    }
}
