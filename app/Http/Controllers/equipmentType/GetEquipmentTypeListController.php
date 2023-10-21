<?php

namespace App\Http\Controllers\equipmentType;

use App\Http\Controllers\Controller;
use App\Http\Resources\equipment\EquipmentCollection;
use App\Http\Resources\equipmentType\EquipmentTypeCollection;
use App\Models\EquipmentType;
use App\Services\Database\GetListByQuery;
use Illuminate\Http\Request;

/**
 * @param $request Request
 * @return EquipmentTypeCollection
 */
class GetEquipmentTypeListController extends Controller
{
    public function __invoke(Request $request){
        $list = GetListByQuery::listByQuery(EquipmentType::class, 'serial_number', $request->get("q")); // получаем список оборудования, вклуючая запрос с query параметрами
        return new EquipmentTypeCollection($list);
    }
}
