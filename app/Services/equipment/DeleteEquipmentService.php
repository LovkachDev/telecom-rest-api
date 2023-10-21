<?php

namespace App\Services\equipment;

use App\Models\Equipment;
/**
 * @param $id integer
 * @return object | array
 */
class DeleteEquipmentService
{
    public static function delete($id){
        $equipment = Equipment::find($id);
        if(!$equipment){
            return response()->json(["error" => "equipment not found"]);
        }
        $equipment->delete();
        return response()->json(["success" => "equipment with identificator {$id} successfully deleted"]);
    }
}
