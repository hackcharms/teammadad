<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     //
    // }
    public function update(User $user)
    {

        return $user->profile_pic==null;
    }
    public function adminWork(User $user)
    {
        return $user->role>89;
    }
    public function anything(User $user)
    {
        return $user->approved;
    }
}
