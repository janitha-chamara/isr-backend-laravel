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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->constrained('jobs');
            $table->string('task_name');
            $table->timestamp('last_update');
            $table->double('quoted_hours');
            $table->double('actual_hours');
            $table->double('percent_used')->nullable();
            $table->double('estimate_to_complete_hours')->nullable();
            $table->double('difference_percent')->nullable();
            $table->double('forecast_hours')->nullable();
            $table->double('variance_hours')->nullable();
            $table->double('variance_percent')->nullable();
            $table->double('weighting')->nullable();
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
        Schema::dropIfExists('tasks');
    }
};
