<?php

namespace App\Http\Controllers\equipment;

use App\Http\Controllers\Controller;
use App\Http\Resources\equipment\EquipmentCollection;
use App\Models\Equipment;
use App\Services\Database\GetListByQuery;
use Illuminate\Http\Request;

/**
 * @param $request Request
 * @return EquipmentCollection
 */

class GetEquimpmentListController extends Controller
{
    public function __invoke(Request $request){
        $list = GetListByQuery::listByQuery(Equipment::class, 'serial_number', $request->get("q")); // получаем список оборудования, вклуючая запрос с query параметрами
        return new EquipmentCollection($list);
    }
}
