<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_role')->insert([
            'id' => 1,
            'employee_id' => 1,
            'role_id' => 1,
        ]);

        DB::table('employee_role')->insert([
            'id' => 2,
            'employee_id' => 2,
            'role_id' => 2,
        ]);

        DB::table('employee_role')->insert([
            'id' => 3,
            'employee_id' => 3,
            'role_id' => 3,
        ]);

        DB::table('employee_role')->insert([
            'id' => 4,
            'employee_id' => 4,
            'role_id' => 3,
        ]);
    }
}
