<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex flex-column align-items-center mt-5">

        <h2 class="mt-3">Name: {{ $employees->name }}</h2>
        <p>Age: {{ $employees->age }}</p>
        <p>Address: {{ $employees->address }}</p>
        <p>Phone Number: {{ $employees->phone_number }}</p>

        <a href="/dashboard" class="btn btn-secondary">Back To Dashboard</a>
    </div>

</body>

</html>
