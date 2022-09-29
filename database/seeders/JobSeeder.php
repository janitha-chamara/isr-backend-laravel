<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
            'job_no' => 'CER005361',
            'job_name' => 'PI 13',
            'description' => '',
            'start_date' => '2022-01-03T00:00:00',
            'due_date' => '2022-03-31T00:00:00',
            'status_id' => 1,
            'job_category' => 'Time & Material',
            'manage_via_isr' => false,
            'client_id' => 1,
            'business_unit_id' => 1,
            'wmfid' => 54208605,
            'wmf_last_update' => now(),
            'last_update' => now(),
            'project_manager_id' => 1,
            'account_manager_id' => 1,
            'quoted_hours' => 30,
            'actual_hours' => 40,
            'percent_used' => 112,
            'estimate_to_complete_hours' => 30,
            'percent_complete' => 70,
            'difference_percent' => 30,
            'forecast_hours' => 50,
            'variance_hours' => 25,
            'variance_percent' => 25,
        ]);
    }
}
