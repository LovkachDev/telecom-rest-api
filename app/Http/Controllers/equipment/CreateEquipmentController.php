<?php

namespace App\Http\Controllers\equipment;

use App\Http\Controllers\Controller;
use App\Services\equipment\CreateEquipmentService;
use Illuminate\Http\Request;

/**
 * @param $request Request
 * @return object
 */
class CreateEquipmentController extends Controller
{
    public function store(Request $request){
        $result = CreateEquipmentService::make($request->input());
        return response()->json($result);
    }
}
