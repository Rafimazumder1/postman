<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    {{-- @extends('layouts.app') --}}
    <div class="container">
        <h1>Delivery Charge Calculator</h1>
        <form action="{{url('/calculat_result')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="distance">Distance (in kilometers):</label>
                <input type="number" name="distance" id="distance" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="weight">Weight (in kilograms):</label>
                <input type="number" name="weight" id="weight" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
    </div>
    

</body>
</html>