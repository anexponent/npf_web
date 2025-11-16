<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Schema;

class SuperAdminSeeder extends Seeder
{
    public function run()
    {
        // Turn off foreign key checks for truncation (MySQL). Adjust for your DB.
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate Spatie tables and others you want to wipe
        DB::table('model_has_permissions')->truncate();
        DB::table('model_has_roles')->truncate();
        DB::table('role_has_permissions')->truncate();
        DB::table('permissions')->truncate();
        DB::table('roles')->truncate();
        DB::table('users')->truncate();

        // If you use Sanctum / Passport tokens, remove them
        if (Schema::hasTable('personal_access_tokens')) {
            DB::table('personal_access_tokens')->truncate();
        }

        // Optionally wipe users table (only do this if you're sure)
        // DB::table('users')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Create role
        $role = Role::create(['name' => 'super-admin', 'guard_name' => 'web']);

        // Option 1: create a handful of core permissions (example)
        $permissions = [
            'manage users',
            'manage roles',
            'manage permissions',
            'manage settings',
            'view logs',
        ];
        foreach ($permissions as $perm) {
            Permission::create(['name' => $perm, 'guard_name' => 'web']);
        }
        // Give role all permissions we've created
        $role->givePermissionTo(Permission::all());

        // Create super admin user with a strong random password
        $password = "Password123";//Str::random(20);
        $user = User::create([
            'name'  => 'Super Admin',
            'email' => 'dict@npf.gov.ng', // change this
            'password' => Hash::make($password),
            // add other required fields if your users table has them
        ]);

        // Assign role
        $user->assignRole($role);

        // Output credentials to console (one-time). Change password immediately after login.
        $this->command->info("SUPER ADMIN CREATED:");
        $this->command->info("Email: dict@npf.gov.ng");
        $this->command->info("Password: $password");
    }
}
