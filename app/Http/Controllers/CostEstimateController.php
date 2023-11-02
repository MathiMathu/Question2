<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdditionalFeature;
use App\Models\BuildingType;
use App\Models\CostEstimate;

class CostEstimateController extends Controller
{
    public function create()
   {
        $additionalFeatures = AdditionalFeature::all();
        $buildingTypes = BuildingType::all();

        return view('cost-estimates-form', compact('additionalFeatures', 'buildingTypes'));
    }

   

   

    public function submitCostEstimates(Request $request)
    {
        $validatedData = $request->validate([
            'building_type_id' => 'required',
            'additional_feature_id' => 'required',
            'number_of_floors' => 'required|integer',
            'total_area' => 'required',
            'material_cost' => 'required',
            'labor_cost' => 'required'
            
        ]);

        $costEstimate = new CostEstimate();
        $costEstimate->building_type_id = $validatedData['building_type_id'];
        $costEstimate->additional_feature_id = $validatedData['additional_feature_id'];
        $costEstimate->number_of_floors = $validatedData['number_of_floors'];
        $costEstimate->total_area = $validatedData['total_area'];
        $costEstimate->material_cost = $validatedData['material_cost'];
        $costEstimate->labor_cost = $validatedData['labor_cost'];
      


      
        $costEstimate->save();
       
        $materialCost = $validatedData['material_cost'];
        $laborCost = $validatedData['labor_cost'];
        
        

        
        $buildingType = BuildingType::find($validatedData['building_type_id']);
        $additionalFeature = AdditionalFeature::find($validatedData['additional_feature_id']);
        $buildingTypeCost = $buildingType->findCostById($validatedData['building_type_id']);
        $additionalFeatureCost = $additionalFeature->findCostById($validatedData['additional_feature_id']);

        
        $totalCost = 100 * $materialCost + 100 * $laborCost + $buildingTypeCost + $additionalFeatureCost; 

        return view('cost-estimates-result', [
            'buildingType' => $buildingType,
            'buildingTypeCost' => $buildingTypeCost,
            'additionalFeature' => $additionalFeature,
            'additionalFeatureCost' => $additionalFeatureCost,
            'number_of_floors' => $validatedData['number_of_floors'],
            'total_area' => $validatedData['total_area'],
            'material_cost' => $materialCost,
            'labor_cost' => $laborCost,
            'totalCost' => $totalCost
        ])->with('success', 'Cost estimate has been saved successfully!');
    }


  
}
