<?php

namespace App\Services\equipment;

use App\Models\Equipment;
/**
 * @param $id integer
 * @return object | array
 */
class DeleteEquipmentService
{
    public static function delete($equipment){
        $equipment->delete();
        return response()->json(["success" => "equipment successfully deleted"]);
    }
}
