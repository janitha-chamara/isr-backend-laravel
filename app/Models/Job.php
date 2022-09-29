<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Job extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->belongsTo(LookUp::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function businessUnit()
    {
        return $this->belongsTo(BusinessUnit::class);
    }

    public function projectManager()
    {
        return DB::table('employees')
            ->where(
                'id', DB::table('employee_role')
                ->where('id', $this->project_manager_id)->first()->employee_id
            );
    }

    public function accountManager()
    {
        return DB::table('employees')
            ->where(
                'id', DB::table('employee_role')
                ->where('id', $this->account_manager_id)->first()->employee_id
            );
    }
}
