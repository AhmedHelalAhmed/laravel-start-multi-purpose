<?php


namespace App\Services;


use App\Contracts\UserRepositoryInterface;

class UserService
{
    /**
     * @var UserRepositoryInterface
     */
    private $users;

    public function __construct(UserRepositoryInterface $users)
    {
        $this->users = $users;
    }

    public function store($data)
    {
        return $this->users->store($data);
    }
}
