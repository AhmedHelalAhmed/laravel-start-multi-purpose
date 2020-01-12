<?php


namespace App\Services;


use App\Contracts\UserRepositoryInterface;
use App\Contracts\UserServiceInterface;

class UserService implements UserServiceInterface
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

    public function all()
    {
        return $this->users->all();
    }

    public function destroy($user)
    {
        return $this->users->destroy($user);

    }
}
