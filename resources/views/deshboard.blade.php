<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($user as $users)
        <tbody>
          <tr>
            <th scope="row">{{$users->id}}</th>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td> <a href="edit/{{$users->id}}">edit</a>
                 <a href="delete/{{$users->id}}">delete</a></td>
          </tr>
        </tbody>
        @endforeach
      </table>
</body>
</html>
