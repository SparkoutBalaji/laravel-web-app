<!DOCTYPE html>
<html lang="en">
<head>
  <title>Emp List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Emp List</h2>
  <table class="table" id="Emp">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Email</th>
        <th>File_Path</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($emp as $emp)
            <tr>
                <td>{{ $emp->id }}</td>
                <td>{{ $emp->name }}</td>
                <td>{{ $emp->age }}</td>
                <td>{{ $emp->phone }}</td>
                <td>{{ $emp->email }}</td>
                <td>{{ $emp->file_path }}</td>
                <td>{{ $emp->address }}</td>
                <td>
                    <form method="POST" action="{{ route('emp-delete', $emp->id) }}">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-primary" onclick='return confirm("Are you sure to Delete this Emp.?")'>Delete</button>
                    </form> <br>

                    <a href="/emp/edit/{{ $emp->id }}"><button class="btn btn-primary">Edit</button></a>
                    <br> <br>
                    <a href="/emp/show/{{ $emp->id }}"><button class="btn btn-info">Show</button></a>

                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#Emp').DataTable();
    });
</script>
</body>
</html>
