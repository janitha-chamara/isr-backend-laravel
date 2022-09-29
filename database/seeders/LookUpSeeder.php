<?php

namespace Database\Seeders;

use App\Models\LookUp;
use Illuminate\Database\Seeder;

class LookUpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LookUp::create([
            'lookup_name' => 'Completed',
            'lookup_value' => 'Completed',
        ]);

        LookUp::create([
            'lookup_name' => 'In Progress',
            'lookup_value' => 'In Progress',
        ]);
    }
}
