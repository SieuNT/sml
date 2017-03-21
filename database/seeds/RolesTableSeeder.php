<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Supper Admin',
                'slug' => 'super_admin',
            ],
            [
                'name' => 'Admin',
                'slug' => 'admin',
            ],
            [
                'name' => 'Manager',
                'slug' => 'manager',
            ],
            [
                'name' => 'Editor',
                'slug' => 'editor',
            ],
            [
                'name' => 'Member',
                'slug' => 'member',
            ],
            [
                'name' => 'Banned',
                'slug' => 'banned',
            ]
        ];
        foreach ($roles as $role):
            \App\Role::create($role);
        endforeach;

        \App\User::find(1)->attachRoles(1);
    }
}
