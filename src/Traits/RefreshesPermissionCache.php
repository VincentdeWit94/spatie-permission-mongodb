<?php

namespace Maklad\Permission\Traits;

use Maklad\Permission\PermissionRegistrar;

/**
 * Trait RefreshesPermissionCache
 * @package Maklad\Permission\Traits
 */
trait RefreshesPermissionCache
{
    public static function bootRefreshesPermissionCache()
    {
        static::saved(function () {
            \app(\config('permission.models.permission'))->forgetCachedPermissions();
        });

        static::deleted(function () {
            \app(\config('permission.models.permission'))->forgetCachedPermissions();
        });
    }
}
