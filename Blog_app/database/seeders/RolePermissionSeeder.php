<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name' => 'user']);
    
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'delete']);

        $user = User::find(1);
        $user->assignRole('admin');
        // $user = User::find(1)?->assignRole('admin');

        $user =User::find(2);
        $user->assignRole('admin');
        // $user =User::find(2)?->assignRole('admin');
    
        $admin->givePermissionTo(['edit']);
        // $admin->givePermissionTo(['edit Article plans', 'edit']);
        }
}
