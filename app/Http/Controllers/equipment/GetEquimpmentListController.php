<?php

namespace App\Http\Controllers\equipment;

use App\Http\Controllers\Controller;
use App\Http\Resources\equipment\EquipmentCollection;
use App\Models\Equipment;
use App\Services\Database\GetListByQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

/**
 * @param $request Request
 * @return EquipmentCollection
 */

class GetEquimpmentListController extends Controller
{
    public function __invoke(Request $request){
        $list = GetListByQuery::listByQuery(Equipment::class, $request->all()); // получаем список оборудования, вклуючая запрос с query параметрами
        return new EquipmentCollection($list);
    }
}
