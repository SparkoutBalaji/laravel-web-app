<!DOCTYPE html>
<html lang="en">
<head>
  <title>Emp List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table table-border">
    <thead>
        <tr>
        <th>User ID</th>
        <th>ID</th>
        <th>Title</th>
        <th>Body</th>
    </tr>
    </thead>
    <tbody>
            @foreach ($api as $api)
            <tr>
                <td>{{ $api->userId }}</td>
                <td>{{ $api->id }}</td>
                <td>{{ $api->title }}</td>
                <td>{{ $api->body }}</td>
            </tr>
                @endforeach
    </tbody>
</table>
</body>
</html>
