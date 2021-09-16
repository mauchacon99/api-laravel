<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\{Vehicles, Locations, Professions, Peoples, Municipalities};

class CreateOrUpdatePeoplesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return   [
            "first_name" => 'required|string',
            "last_name"  => 'required|string',
            "DNI"        => 'required|numeric|unique:peoples',
            "birthdate"  => 'required',
            "phone"      => 'required|numeric',
            "sex"        => 'required',
            "locations.address" => 'required',
            "locations.municipalities_id" => '',
            "locations.otherMunicp"       => '',
            "professions.professions_id" => '',
            "professions.name" => '',
            "professions.id"   => '',
            "vehicle.vehicle_types_id" => '',
            "vehicle.vehicle_brands_id" => '',
        ];
    }

    public function createdOrUdpate()
    {
        \DB::transaction(function () {
            $people = new Peoples();
            $people->first_name = $this->first_name;
            $people->last_name  = $this->last_name;
            $people->DNI        = $this->DNI;
            $people->birthdate  = $this->birthdate;
            $people->phone      = $this->phone;
            
            if (!array_key_exists('professions_id', $this->professions)) {
                // Insert  Professions
                $profession = Professions::create([
                    'name' => $this->professions['name']
                ]);
                $people->professions_id = $profession->id;
            } else {
                $people->professions_id = $this->professions['professions_id'];
            }
            if (empty($this->locations['municipalities_id'])) {
                // Insert  Municp
             
                $municp = Municipalities::create([
                    'name' => $this->locations['otherMunicp']
                ]);
                
                $location = locations::create([
                    'address' => $this->locations['address'],
                    'municipalities_id' => $municp->id
                ]);

                $people->locations_id = $location->id;
            } else {
                
                $location = Locations::create([
                    'address' => $this->locations['address'],
                    'municipalities_id' => $this->locations['municipalities_id']
                ]);
                $people->locations_id = $location->id;
            }
            if ($this->vehicle['vehicle_types_id'] && $this->vehicle['vehicle_brands_id']) {
                $vehicles = Vehicles::create($this->vehicle);
                
                $people->vehicles_id = $vehicles->id;
            }
             $people->save();
             return $people;
        });
    }
}
