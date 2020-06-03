<?php

namespace App\Policies;

use App\User;
use App\Memo;
use Illuminate\Auth\Access\HandlesAuthorization;

class MemoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function edit(User $user, Memo $memo)
    {
        return $user->id == $memo->user_id;
    }
}
