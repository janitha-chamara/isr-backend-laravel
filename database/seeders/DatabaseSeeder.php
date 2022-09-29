<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
     $lookUpSeeder = new LookUpSeeder();
     $clientSeeder = new ClientSeeder();
     $businessUnitSeeder = new BusinessUnitSeeder();
     $employeeSeeder = new EmployeeSeeder();
     $roleSeeder = new RoleSeeder();
     $employeeRoleSeeder = new EmployeeRoleSeeder();
     $jobSeeder = new JobSeeder();

     $lookUpSeeder->run();
     $clientSeeder->run();
     $businessUnitSeeder->run();
     $employeeSeeder->run();
     $roleSeeder->run();
     $employeeRoleSeeder->run();
     $jobSeeder->run();
    }
}
