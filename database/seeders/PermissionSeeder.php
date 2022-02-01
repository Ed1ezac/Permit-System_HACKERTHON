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
        Permission::create(['name' => 'approve applications']);
        Permission::create(['name' => 'suspend users']);

        $role = Role::create(['name' => 'applicant']);
        $role->givePermissionTo('submit applications');

        $role = Role::create(['name' => 'moderator'])
            ->givePermissionTo(['submit applications', 'approve applications']);

        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo(Permission::all());
    }
}
