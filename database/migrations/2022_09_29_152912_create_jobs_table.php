<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_no');
            $table->string('job_name');
            $table->string('description')->nullable();
            $table->date('start_date');
            $table->date('due_date');
            $table->foreignId('status_id')->constrained('look_ups');
            $table->string('job_category')->nullable();
            $table->boolean('manage_via_isr')->nullable();
            $table->foreignId('client_id')->constrained('clients');
            $table->foreignId('business_unit_id')->constrained('business_units');
            $table->bigInteger('wmfid');
            $table->timestamp('wmf_last_update');
            $table->timestamp('last_update');
            $table->foreignId('project_manager_id')->constrained('employee_role');
            $table->foreignId('account_manager_id')->constrained('employee_role');
            $table->double('quoted_hours');
            $table->double('actual_hours');
            $table->double('percent_used')->nullable();
            $table->double('estimate_to_complete_hours')->nullable();
            $table->double('percent_complete')->nullable();
            $table->double('difference_percent')->nullable();
            $table->double('forecast_hours')->nullable();
            $table->double('variance_hours')->nullable();
            $table->double('variance_percent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
