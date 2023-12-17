<!DOCTYPE html>
<html lang="en">
<head>
  <title>Emp Create</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Emp Create</h2>
  <form action="{{ route('emp-store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name :</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ old('name') }}">
      </div>
      <div class="form-group">
        <label for="age">Age :</label>
        <input type="text" class="form-control" id="age" placeholder="Enter age" name="age" value="{{ old('age') }}">
      </div>
    <div class="form-group">
      <label for="email">Email :</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
    </div>
    <div class="form-group">
        <label for="phone">Phone :</label>
        <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" value="{{ old('phone') }}">
      </div>
    <div class="form-group">
      <label for="file_path">File Path :</label>
      <input type="text" class="form-control" id="file_path" placeholder="Enter file_path" name="file_path" value="{{ old('file_path') }}">
    </div>
    <div class="form-group">
        <label for="address">Address :</label> <br>
        <textarea name="address" class="form-control" id="address" cols="30" rows="5" value="{{ old('address') }}"></textarea>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
