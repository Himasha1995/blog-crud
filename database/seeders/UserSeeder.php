<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'super-admin5',
            'email' => 'super-admin5@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'admin5',
            'email' => 'admin5@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'user5',
            'email' => 'user5@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        $role1 = Role::create(['name' => 'user5']);
        $role1->givePermissionTo('post-list');
        $role1->givePermissionTo('post-edit');

        $role2 = Role::create(['name' => 'admin5']);
        $role2->givePermissionTo('post-create');
        $role2->givePermissionTo('post-delete');
        $role2->givePermissionTo('post-list');
        $role2->givePermissionTo('post-edit');

        $role2 = Role::create(['name' => 'super-admin5']);
        $role2->givePermissionTo('post-create');
        $role2->givePermissionTo('post-delete');
        $role2->givePermissionTo('post-list');
        $role2->givePermissionTo('post-edit');

        
    }
}
