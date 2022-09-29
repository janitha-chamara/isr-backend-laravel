<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role_name' => 'Manager',
            'role_level' => '1',
        ]);

        Role::create([
            'role_name' => 'Partner',
            'role_level' => '2',
        ]);

        Role::create([
            'role_name' => 'Staff',
            'role_level' => '3',
        ]);
    }
}
