<?php

namespace App\Http\Controllers\equipment;

use App\Http\Controllers\Controller;
use App\Models\Equipment;
use App\Services\Database\GetEquipmentById;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @param $id integer
 * @return Model | string
 */
class GetEquipmentByIdController extends Controller
{
    public function __invoke($id){
        return GetEquipmentById::get($id); // returns data of equipment or return error message if ed not found
    }
}
