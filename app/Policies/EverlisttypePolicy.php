<?php

namespace App\Policies;

use App\Everlisttype;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EverlisttypePolicy
{
    use HandlesAuthorization;

    public function update(User $user, Everlisttype $everlisttype)
    {
        return $user->id === $everlisttype->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Everlisttype  $everlisttype
     * @return mixed
     */
    public function delete(User $user, Everlisttype $everlisttype)
    {
        return $user->id === $everlisttype->user_id;
    }

   
}
