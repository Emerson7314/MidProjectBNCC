<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('styles/addEmployee.css') }}">


</head>

<body>
    <div class="d-flex flex-column justify-content-center w-10 h-10">

    </div>
    <h2 class="text-center mt-5">Add New Employee</h2>

    <form action="/store-employee" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-flex flex-column align-items-center pt-3 gap-3">
            <div class="form-group col-4">
                <label class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Employee's Name" name="name" value="{{ old('name' )}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-4">
                <label class="form-label">Age</label>
                <input type="number" class="form-control @error('age') is-invalid @enderror" placeholder="Enter Employee's Age" name="age" value="{{ old('age' )}}">
                @error('age')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-4">
                <label class="form-label">Address</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Enter Employee's Address" name="address" value="{{ old('address' )}}">
                @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group col-4">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Enter Employee's Phone Number" name="phone_number" value="{{ old('phone_number' )}}">
                @error('phone_number')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</body>

</html>
