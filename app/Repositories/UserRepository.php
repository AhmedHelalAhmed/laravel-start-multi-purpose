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
        // array filter here to remove the null values like photo
        // array merge to override the password
        return $this->user->create(
            array_merge(
                array_filter($data),
                [
                    'password' => Hash::make($data['password'])
                ]
            )
        );
    }
}
