<?php

namespace App\Services\equipment;
use App\Helpers\Validator\MaskValidator;
use App\Models\Equipment;
use App\Models\EquipmentType;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\equipment\EquipmentResource;

class CreateEquipmentService
{
    public static function make($data){
        $errors = [];
        $success = [];
        foreach ($data as $key => $item){
            $validation = Validator::make($item, [
                'equipment_type_id' => 'required|numeric',
                'serial_number' => 'required|string|unique:equipment'
            ]);
            try{
                $equipment_type_mask = EquipmentType::findOrFail($validation->getData()['equipment_type_id'])->mask;
            }
            catch(ModelNotFoundException){
                 $errors[$key] = "Equipment type with id {$validation->getData()['equipment_type_id']} not found";
                 continue;
            }

            $maskValidate = MaskValidator::validate($validation->getData()['serial_number'], $equipment_type_mask); //валидация на совпадение серийного номера с маской
            if(!$maskValidate){
                $errors[$key] = "Serial number does not match with mask.";
                continue;
            }

            if($validation->fails()){
                $errors[$key] = $validation->errors()->first();
            }
            else{
                $success += [$key => self::create($validation->getData())];
            }
        }
        return ["errors" => (object)$errors, "success" => (object)$success];
    }

    public static function create($item){
        $items = [];
        foreach ($item as $key => $value){
            $items[$key] = $value;
        }
        return new EquipmentResource(Equipment::create($items));
    }
}
