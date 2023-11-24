<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Soft Deletes - Restore Records, Force Delete, Fetch Deleted Records and Soft Delete</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
</head>
<body>
    <div class="container">
        <h1 class="text-center text-success pt-4">List of users are deleted </h1>
        <hr>
    <div class="row py-2">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <b><a class="btn btn-default m-2" href="home"><i class="fa fa-thin fa-newspaper"></i> List of Users</a>
            </div>
        </div>
        <h3><a class="btn btn-success" href="/restore-all"><i class="fa fa-sharp fa-solid fa-trash-arrow-up"></i> Restore All</a></h3>

    </div>

<table  class="table table-borderless">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Statut</th>
        <th scope="col">Restore</th>
      </tr>
    </thead>
    <tbody>
    @foreach($utili as $ur)
    <tr>
    <td>
        {{ $ur->id }}
    </td>
    <td>
        {{ $ur->name }}
    </td>
    <td>
        {{ $ur->email }}
    </td>
        @if ($ur->trashed())
      <td> <form action="{{ route('users.forceDelete', $ur->id) }}" method="post" style="display: inline;">
            @csrf
            @method('delete')
            <button type="submit"  onclick="return confirm('Are you sure you want to permanently delete this user?')" class="btn btn-danger">Delete</button>
        </form></td>  
       
        <td><form action="{{ route('users.restore', $ur->id) }}" method="post" style="display: inline;">
            @csrf
            @method('patch')
            <button type="submit" class="btn btn-warning">Restore</button>
        </form></td></tr>
    @endif
    @endforeach
</tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
 $(document).ready(function () {
    $('#example').DataTable();
});
</script>
</body>
</html>