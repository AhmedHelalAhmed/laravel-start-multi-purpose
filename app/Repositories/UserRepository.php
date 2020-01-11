<?php


namespace App\Repositories;

use App\Contracts\UserRepositoryInterface;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function store($data)
    {
        return $this->user->create(
           [
               'name' => $data['name'],
               'email' => $data['email'],
               'type' => $data['type'],
               'bio' => $data['bio'],
               'photo' => $data['photo'],
               'password'=> Hash::make($data['password'])
           ]
        );
    }
}
