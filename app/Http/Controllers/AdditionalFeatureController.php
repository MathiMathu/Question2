<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdditionalFeature;

class AdditionalFeatureController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'additional_feature_name' => 'required|max:255',
            'additional_feature_description' => 'required',
            'additional_feature_cost' => 'required|numeric',
        ]);

        AdditionalFeature::create([
            'name' => $validatedData['additional_feature_name'],
            'description' => $validatedData['additional_feature_description'],
            'cost' => $validatedData['additional_feature_cost'],
        ]);

        return redirect('/add-additional-feature')->with('success', 'Additional feature has been added successfully!');
    }
}
