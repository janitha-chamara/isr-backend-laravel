<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'task_name' => $this->task_name,
            'quoted_hours' => $this->quoted_hours,
            'actual_hours' => $this->actual_hours,
            'percent_used' => $this->percent_used,
            'estimate_to_complete_hours' => $this->estimate_to_complete_hours,
            'percent_complete' => $this->percent_complete,
            'difference_percent' => $this->difference_percent,
            'forecast_hours' => $this->forecast_hours,
            'variance_percent' => $this->variance_percent,
        ];
    }
}
