<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
    
         //create permissions
        Permission::create(['name' => 'submit applications']);
        Permission::create(['name' => 'view permits']);
        Permission::create(['name' => 'assess applications']);
        Permission::create(['name' => 'approve applications']);
        Permission::create(['name' => 'control users']);

        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo('submit applications');

        $role = Role::create(['name' => 'issuing-officer'])
            ->givePermissionTo(['submit applications', 'assess applications']);

            $role = Role::create(['name' => 'authorising-officer'])
            ->givePermissionTo(['submit applications','assess applications',
                'approve applications']);

        $role = Role::create(['name' => 'receiving-officer'])
            ->givePermissionTo(['submit applications', 'view permits']);

        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo(Permission::all());
    }
}
