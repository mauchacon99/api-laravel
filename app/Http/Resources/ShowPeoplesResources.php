<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShowPeoplesResources extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'full_name'  => $this->first_name . ' ' . $this->last_name,
            'DNI'        => $this->DNI,
            'birthdate'  => $this->birthdate,
            'phone'      => $this->phone,
            'sex'        => $this->sex,
            'profession'    => $this->professions->name,
            'vehicleType'   => $this->Vehicles ? $this->Vehicles->VehicleTypes->name : 'No Posee' ,
            'vehicleBrand'  => $this->Vehicles ? $this->Vehicles->VehicleBrands->name : 'No Posee',
            'locations'     => $this->locations->address,
            'municipality'  => $this->locations->municipalities->name,
        ];
    }
}
