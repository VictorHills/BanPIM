<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait FilterByCreatedBy
{
    /**
     * Scope a query to only include models created by the authenticated user.
     *
     * @param Builder $query
     * @param int|null $userId
     * @return Builder
     */
    public function scopeCreatedBy(Builder $query, int $userId = null): Builder
    {
        if (auth()->check()) {
            $userId = $userId ?? auth()->id();
            return $query->where('created_by', $userId);
        }

        return $query;
    }
}
