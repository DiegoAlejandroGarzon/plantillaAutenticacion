<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear permisos para los modelos
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'show users']);

        // Crear el rol super-admin y asignarle los permisos
        $superAdminRole = Role::create(['name' => 'super-admin']);
        $superAdminRole->givePermissionTo([
            'create users',
            'edit users',
            'delete users',
            'show users',
        ]);
    }
}
