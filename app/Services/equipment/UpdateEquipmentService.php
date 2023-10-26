<?php

namespace App\Services\equipment;

use App\Helpers\Validator\MaskValidator;
use App\Http\Resources\equipment\EquipmentResource;
use App\Models\Equipment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

/**
 * @param $id integer
 * @param $data array
 * @return object
 */

class UpdateEquipmentService
{
    public static function update($id, $data){
        $validated = Validator::make($data, [
            'equipment_type_id' => 'required|numeric|exists:equipment_types,id',
            'serial_number'     => ['required','string', Rule::unique('equipment')->ignore($id)]
        ]);
        $equipment = Equipment::find($id);

        if($validated->fails()){
            return ["error" => $validated->messages()->first()];
        }

        foreach ($data as $key => $item){
            $equipment->$key = $item;
        }
        $maskValidate = MaskValidator::validate($equipment->serial_number, $equipment->equipment_type->mask); //валидация на совпадение серийного номера с маской
        if(!$maskValidate){
            return ["error" => "Serial number does not match with mask."];
        }

        $equipment->save();
        return new EquipmentResource($equipment);
    }
}
