<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    /**
     * Handle the user "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function saving(User $user)
    {
        if ($user->email === 'janasarii@gmail.com') {
            $user->role = 'ADMIN_ROLE';
        }
    }
}
