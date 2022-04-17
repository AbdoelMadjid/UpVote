<?php

namespace App\Repository\Vote;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

interface VoteRepositoryEloquent
{
    public function voteCandidate(User $user);
}
