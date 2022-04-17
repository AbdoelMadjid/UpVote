<?php

namespace App\Repository\Vote;

use App\Models\User;

class VoteRepositoryEloquentImpl implements VoteRepositoryEloquent
{
    public function voteCandidate(User $user)
    {
        return $user;
    }
}
