<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostFactor extends Model
{
    use HasFactory;
    protected $fillable = [
        'factor_name',
        'value',
    ];
}
