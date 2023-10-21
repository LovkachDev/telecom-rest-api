<?php

namespace App\Http\Controllers\equipment;

use App\Http\Controllers\Controller;
use App\Services\equipment\DeleteEquipmentService;
use Illuminate\Http\Request;


/**
 * @param $id integer
 * @return object | array
 */
class DeleteEquipmentController extends Controller
{
    public function delete($id){
        return DeleteEquipmentService::delete($id);
    }
}
