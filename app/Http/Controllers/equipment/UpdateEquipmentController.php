<?php

namespace App\Http\Controllers\equipment;

use App\Http\Controllers\Controller;
use App\Http\Requests\equipment\UpdateEquipmentRequest;
use App\Models\Equipment;
use App\Services\equipment\UpdateEquipmentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

/**
 * @param $id integer
 * @param $request Request
 * @return array | object
 */
class UpdateEquipmentController extends Controller
{
    public function __invoke(Equipment $equipment, UpdateEquipmentRequest $request)
    {
        return UpdateEquipmentService::update($equipment, $request->input());
    }
}
