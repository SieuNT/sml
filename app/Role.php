<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * @var string
     */
    protected $table = 'roles';

    /**
     * @var array
     */
    protected $fillable = ['name', 'slug'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users() {
        return $this->belongsToMany(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions() {
        return $this->belongsToMany(Permission::class)->withTimestamps();
    }

    /**
     * @param $permissionIds
     */
    public function attachPermissions($permissionIds) {
        return $this->permissions()->attach($permissionIds);
    }

    /**
     * @param $permissionIds
     * @return int
     */
    public function detachPermissions($permissionIds) {
        return $this->permissions()->detach($permissionIds);
    }

    /**
     * @param $permissionIds
     * @return array
     */
    public function syncPermissions($permissionIds) {
        return $this->permissions()->sync($permissionIds);
    }

    public function syncUsers($userIds) {
        return $this->users()->sync($userIds);
    }
}
