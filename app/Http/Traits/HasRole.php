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
    public function hasRole(Role $role): bool
    {
        return $this->role_id === $role;
    }
}
