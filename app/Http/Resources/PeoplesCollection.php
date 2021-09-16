<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PeoplesCollection extends JsonResource
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
            'sex'        => $this->sex,
            'profession' => $this->professions->name,
            'locations'  => $this->locations->address,
            'municipio'  => $this->locations->municipalities->name,
        ];
    }
}
