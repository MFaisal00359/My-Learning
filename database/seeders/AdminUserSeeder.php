<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'manage access']);
        $permission->assignRole($adminRole);

        $admin = User::factory()->create([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('SecurePassword')
        ]);
        $admin->assignRole('admin');
    }
}
