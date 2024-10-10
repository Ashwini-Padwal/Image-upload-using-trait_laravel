<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="container mt-3">
  <h2>User form</h2>
  <form action="{{ route('user.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="mb-3">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter Image" name="image">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>        
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created Date</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $k=> $user)
        <tr>
            <td>{{++$k}}</td>
            <td><img width='50' src="/uploads/users/{{$user->image}}"></td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            @endforeach
</tr>
</tbody>
</div>

    
</body>
</html>