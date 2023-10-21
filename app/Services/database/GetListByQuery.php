<?php

namespace App\Services\Database;


use Illuminate\Database\Eloquent\Model;

/**
 * @param $table Model
 * @param $column string
 * @param $query string
 * @return Model
 */

class GetListByQuery{
    public static function listByQuery($table, $column, $query){
        $query != null ?
            $data = $table::where($column, 'LIKE', "%{$query}%")->get() :
            $data = $table::all();
        return $data;
    }
}
