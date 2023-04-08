<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>barcode</title>
</head>
<body>
    <h1>Employee Details</h1>

<p>Name: {{ $barcode->name }}</p>
<p>Age: {{ $barcode->age }}</p>
<p>Salary: {{ $barcode->salary }}</p>

<img src="{{ url('/barcode/' . $barcode->id) }}">

     
</body>
</html>