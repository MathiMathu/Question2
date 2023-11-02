<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'cost',
    ];

    // AdditionalFeature.php
    public function costEstimates()
    {
        return $this->hasMany(CostEstimate::class);
    }

    public function findCostById($additionalFeatureId)
    {
        return self::where('id', $additionalFeatureId)->value('cost');
    }
}
