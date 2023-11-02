<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostEstimate extends Model
{
    use HasFactory;

    protected $fillable = [
        'building_type_id',
        'additional_feature_id',
        'number_of_floors',
        'total_area',
        'material_cost',
        'labor_cost',
    ];

    public function additionalFeature()
    {
    return $this->belongsTo(AdditionalFeature::class);
    }

    public function buildingType()
    {
        return $this->belongsTo(BuildingType::class);
    }
}
