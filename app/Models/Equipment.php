<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipment extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ["equipment_type_id", "serial_number", "desc"];

    public function equipment_type(){
        return $this->belongsTo(EquipmentType::class);
    }
}
