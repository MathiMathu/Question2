<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Building Type</title>
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
        input[type="text"], input[type="number"] {
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
    <h2>Add Building Type</h2>
    <form action="/add-building-type" method="POST">
        @csrf
        <label for="building_type_name">Building Type Name:</label><br>
        <input type="text" id="building_type_name" name="building_type_name"><br><br>

        <label for="building_type_description">Building Type Description:</label><br>
        <input type="text" id="building_type_description" name="building_type_description"><br><br>

        <label for="building_type_cost">Building Type Cost:</label><br>
        <input type="number" step="0.01" id="building_type_cost" name="building_type_cost"><br><br>

        <input type="submit" value="Add Building Type">
    </form>
</body>
</html>
