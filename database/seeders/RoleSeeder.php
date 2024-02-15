<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'Acces All']);
        $user =  User::create([
            'name' => 'thuval',
            'email' => 'thuval@gmail.com',
            'phone' => '081513889536',
            'address' => 'desa ciburuy',
            'password' => Hash::make('g3n3r451b1ru'),

        ]);

        $role->givePermissionTo($permission);
        $permission->assignRole($role);

        $role->syncPermissions($permission);
        $permission->syncRoles($role);
        $user->givePermissionTo('Acces All');
        $user->assignRole('admin');
    }
}
