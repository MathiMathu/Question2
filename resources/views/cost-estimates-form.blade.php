<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cost Estimates Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            background: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #45a049;
        }
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Building Cost Estimate Form</h2>
    <form action="/submit-cost-estimates" method="POST">
        @csrf
        <label for="building_type">Building Type:</label><br>
        <select name="building_type_id" required>
          @foreach($buildingTypes as $buildingType)
        <option value="{{ $buildingType->id }}">{{ $buildingType->name }}</option>
          @endforeach
        </select>

        <label for="number_of_floors">Number of Floors:</label><br>
        <input type="number" id="number_of_floors" name="number_of_floors" required><br><br>

        <label for="total_area">Total Area:</label><br>
        <input type="number" step="1" id="total_area" name="total_area" required><br><br>

        <label for="material_cost">Cost of Materials per Square Foot:</label><br>
        <input type="number" step="1000" id="material_cost" name="material_cost" required><br><br>

        <label for="labor_cost">Labor Cost per Hour:</label><br>
        <input type="number" step="1000" id="labor_cost" name="labor_cost" required><br><br>

        <label for="additional_features">Additional Features:</label><br>
        <select name="additional_feature_id" required>
        @foreach($additionalFeatures as $additionalFeature)
        <option value="{{ $additionalFeature->id }}">{{ $additionalFeature->name }}</option>
        @endforeach
        </select>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
