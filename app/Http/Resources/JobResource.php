<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class JobResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'job_no' => $this->job_no,
            'job_name' => $this->job_name,
            'description' => $this->description,
            'start_date' => $this->start_date,
            'due_date' => $this->due_date,
            'status' => $this->status->lookup_name,
            'job_category' => $this->job_category,
            'manage_via_isr' => $this->manage_via_isr,
            'client' => $this->client->client_name,
            'business_unit' => $this->businessUnit->job_business_unit,
            'wmfid' => $this->wmfid,
            'wmf_last_update' => $this->wmf_last_update,
            'last_update' => $this->last_update,
            'project_manager' => DB::table('employees')
                ->where(
                    'id', DB::table('employee_role')
                    ->where('id', $this->project_manager_id)->first()->employee_id
                )->first()->first_name,
            'account_manager' => DB::table('employees')
                ->where(
                    'id', DB::table('employee_role')
                    ->where('id', $this->account_manager_id)->first()->employee_id
                )->first()->first_name,
            'quoted_hours' => $this->quoted_hours,
            'actual_hours' => $this->actual_hours,
            'percent_used' => $this->percent_used,
            'estimate_to_complete_hours' => $this->estimate_to_complete_hours,
            'percent_complete' => $this->percent_complete,
            'difference_percent' => $this->difference_percent,
            'forecast_hours' => $this->forecast_hours,
            'variance_hours' => $this->variance_hours,
            'variance_percent' => $this->variance_percent,
        ];
    }
}
