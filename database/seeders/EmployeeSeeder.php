<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'first_name' => 'Prasanna',
            'last_name' => 'Illukkumbura',
        ]);

        Employee::create([
            'first_name' => 'Nathan',
            'last_name' => 'Hodder',
        ]);

        Employee::create([
            'first_name' => 'Andrew',
            'last_name' => 'Vanspall',
        ]);

        Employee::create([
            'first_name' => 'Sajana',
            'last_name' => 'Abeygunawardena',
        ]);
    }
}
