<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuildingType;

class BuildingTypeController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'building_type_name' => 'required|max:255',
            'building_type_description' => 'required',
            'building_type_cost' => 'required|numeric',
        ]);

        BuildingType::create([
            'name' => $validatedData['building_type_name'],
            'description' => $validatedData['building_type_description'],
            'cost' => $validatedData['building_type_cost'],
        ]);

        return redirect('/add-building-type')->with('success', 'Building type has been added successfully!');
    }
}
