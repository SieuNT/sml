<?php

namespace App\Helpers;

class CommonHelper
{
    public static function getRouteLogin($request, $type = 'guest')
    {
        $prefix = trim($request->route()->getPrefix(), '/');
        switch ($prefix) {
            case 'admin':
                $route = ($type === 'guest') ? 'backend.login' : 'backend';
                break;
            default:
                $route = ($type === 'guest') ? 'login' : 'frontend';
                break;
        }
        return $route;
    }
}