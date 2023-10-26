<?php

namespace App\Http\Controllers\equipment;

use App\Http\Controllers\Controller;
use App\Http\Resources\equipment\EquipmentResource;
use App\Models\Equipment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @param $id integer
 * @return Model | string
 */
class GetEquipmentByIdController extends Controller
{
    public function get(Equipment $equipment){
        return new EquipmentResource($equipment); // returns data of equipment or return error message if ed not found
    }
}
