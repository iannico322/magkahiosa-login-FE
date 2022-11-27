<?php

namespace App\Models\Traits;

trait FilamentTrait
{
    /*
     * Returns whether the user is allowed to access Filament
     */
    public function canAccessFilament(): bool
    {
        return true;
    }
}
