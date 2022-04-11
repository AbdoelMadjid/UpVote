<?php

namespace App\Http\Traits;

use App\Models\Role;

trait HasRole
{
    /**
     * Determine if user has role
     *
     * @param \App\Models\Role $role
     * @return boolean
     */
    public function hasRole(int $role_id): bool
    {
        return $this->role_id === $role_id;
    }
}
