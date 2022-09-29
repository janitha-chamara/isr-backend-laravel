<?php

namespace Database\Seeders;

use App\Models\BusinessUnit;
use Illuminate\Database\Seeder;

class BusinessUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BusinessUnit::create([
            'job_business_unit' => 'sample job business unit',
            'lead_business_unit' => 'sample lead business unit',
        ]);
    }
}
