<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cost Estimate Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .result-container {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .result {
            font-weight: bold;
            margin-bottom: 10px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        hr {
            margin: 20px 0;
            border: 0;
            border-top: 1px solid #ddd;
        }

        
        .print-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .print-button:hover {
            background-color: #45a049;
        }
        .back-button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        .back-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h2 style="text-align: center;">Building Cost Estimate Result</h2>
        <div class="result">
            <label>Building Type:</label> {{ $buildingType->name }} (Cost: ${{ $buildingTypeCost }}) <br>
            <label>Number of Floors:</label> {{ $number_of_floors }} <br>
            <label>Total Area:</label> {{ $total_area }} <br>
            <label>Cost of Materials per Square Foot:</label> ${{ $material_cost }} <br>
            <label>Labor Cost per Hour:</label> ${{ $labor_cost }} <br>
            <label>Additional Features:</label> {{ $additionalFeature->name }} (Cost: ${{ $additionalFeatureCost }}) <br>
            <hr>

            <label style="font-size: 1.2em;">Total Cost:</label> <span style="font-size: 1.2em;">${{ $totalCost }}</span>
        </div>
    </div>
</body>

<button class="print-button" onclick="printPage()">Print</button>
<button onclick="goBack()" class="back-button no-print">Go Back</button>
<script>
    function printPage() {
        window.print();
    }
   
        function goBack() {
            window.history.back();
        }
   
</script>
</html>
