<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles() {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    /**
     * @param $roles
     * @return bool
     */
    public function hasRole($roles) {
        if(!is_array($roles)) {
            $roles = explode('|', $roles);
        }

        $userRoles = $this->roles()->pluck('slug')->toArray();

        return !empty(array_intersect($roles, $userRoles));
    }

    /**
     * @param $roleIds
     */
    public function attachRoles($roleIds) {
        return $this->roles()->attach($roleIds);
    }

    /**
     * @param $roleIds
     */
    public function detachRoles($roleIds) {
        return $this->roles()->detach($roleIds);
    }

    public function syncRoles($roleIds) {
        return $this->roles()->sync($roleIds);
    }
}
