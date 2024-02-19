<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
        integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
    </script>

</head>
<body>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
     </div>
    <h4>PT. CHIPI CHAPA</h4>
    @foreach($employees as $employee)
    <div class="col-4 mb-3 mt-3">
        <div class="card" style="width: 25rem;">
            <div class="card-body">
              <h5 class="card-title">Name: {{$employee->name}}</h5>
              <p class="card-text">Age: {{$employee->age}}</p>
              <p class="card-text">Address: {{$employee->address}}.</p>
              <p class="card-text">Phone Number: {{$employee->phone_number}}.</p>
              <a href="/detail-employee/{{$employee->id}}" class="card-link">Details</a>
              <a href="/edit-employee/{{$employee->id}}" class="card-link">Edit</a>
              <form action="/delete-employee/{{ $employee->id }}" method="POST"
                id="deleteForm{{ $employee->id }}">
                @csrf
                @method('delete')
                <button type="button" onclick="confirmDelete({{ $employee->id }})"
                    class="btn btn-danger btn-sm"> Delete
                </button>
            </form>

            </div>
          </div>

    </div>
    @endforeach
</body>
<script>
    function confirmDelete(employeeId) {
        var confirmation = confirm("Do you really wish to delete this profile?");
        if (confirmation) {
            document.getElementById('deleteForm' + employeeId).submit();
        } else {
            return false;
        }
    }
</script>
</html>
