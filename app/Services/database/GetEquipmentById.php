<?php

namespace App\Services\Database;

use App\Models\Equipment;
use App\Http\Resources\equipment\EquipmentResource;

/**
 * @param $id integer
 * @return EquipmentResource | string
 */
class GetEquipmentById
{
    public static function get($id)
    {
        $equipment = Equipment::find($id);
        if(!$equipment){
            return response()->json(["message" => "equipment with id {$id} not found."]);
        }
        return new EquipmentResource($equipment);
    }
}
