<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CommentPolicy
{
    public function delete(User $user, Comment $commment): bool
    {
        // destroy
        return ($user->is_admin || $user->is($commment->user));
    }
}
