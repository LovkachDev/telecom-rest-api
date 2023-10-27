<?php

namespace App\Services\Database;


use App\Models\Equipment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

/**
 * @param $table Model
 * @param $column string
 * @param $query string
 * @return Model
 */

class GetListByQuery{
    public static function listByQuery($table, $items){
        $query = $table::query();
        foreach ($items as $field => $value) {
            if (Schema::hasColumn((new $table)->getTable(), $field)) {
                $query->orWhere($field, 'LIKE', "%{$value}%");
            }
        }
        return $query->paginate(10);
    }
}
