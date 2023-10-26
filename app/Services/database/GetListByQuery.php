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
        if($query != null){
            $data = $table::where($column, 'LIKE', "%{$query}%")->paginate(10);
        }
        else{
            $data = $table::paginate(10);
        }
        return $data;
    }
}
