<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BikeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request):array
    {
        return [
            "id" =>$this->id,
            "manufacturer" => $this->manufacturer,
            "model" => $this->model,
            "license_plate" => $this->license_plate,
            "color" => $this->color,
            "horsepower" =>$this->horsepower,
            "consumption" =>$this->consumption,
            "year" => $this->year,
            "owner" => new OwnerResource($this->whenLoaded('owner')),
        ];
    }
}
