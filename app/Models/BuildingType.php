<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildingType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'cost',
    ];

    // BuildingType.php
    public function costEstimates()
    {
        return $this->hasMany(CostEstimate::class);
    }

    public static function findCostById($buildingTypeId)
{
    return self::where('id', $buildingTypeId)->value('cost');
}

}
