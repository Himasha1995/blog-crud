<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Spatie\Permission\Models\Role;




class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'view post']);
        Permission::create(['name' => 'publish post']);
        Permission::create(['name' => 'edit post']);
        Permission::create(['name' => 'delete post']);
        Permission::create(['name' => 'active post']);
        Permission::create(['name' => 'create post']);

        $admin = Role::create(['name' => 'admin6']);
        $admin->givePermissionTo('view post');
        $admin->givePermissionTo('edit post');
        $admin->givePermissionTo('publish post');
        $admin->givePermissionTo('delete post');
        $admin->givePermissionTo('active post');
        $admin->givePermissionTo('create post');
        
        $user = Role::create(['name' => 'user6']);
        $user->givePermissionTo('view post');

        $super_admin = Role::create(['name' => 'super-admin6']);
        $super_admin->givePermissionTo(Permission::all());

        //
        $admin = User::where('name', 'admin6')->first();
        $user = User::where('name', 'user6')->first();
        $super_admin = User::where('name', 'super-admin6')->first();

        $admin->assignRole('admin6');
        $user->assignRole('user6');
        $super_admin->assignRole('super-admin6');
    
    }
}
