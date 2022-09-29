<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_name',
        'quoted_hours',
        'actual_hours',
        'percent_used',
        'estimate_to_complete_hours',
        'percent_complete',
        'difference_percent',
        'forecast_hours',
        'variance_percent',
    ];
}
