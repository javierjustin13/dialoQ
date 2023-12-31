<?php

namespace App\Policies;

use App\Models\Dialog;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class DialogPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function update(User $user, Dialog $dialog): bool
    {
        // edit / update
        return ($user->is_admin || $user->is($dialog->user));
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Dialog $dialog): bool
    {
        // destroy
        return ($user->is_admin || $user->is($dialog->user));
    }
}
