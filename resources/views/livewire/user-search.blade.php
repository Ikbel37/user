
<div class="container">
  <h1 class="text-center text-success pt-4">Welcome Admin</h1>
  <hr>
<div>
  <br><div class="text-end" >
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>
<a href="{{ route('logout') }}">Log-Out</a> </div>
<br>
<div class="col-md-6 position-absolute top-20 end-0 translate-middle-y">
      <a class="btn btn-default m-2 " href="in"> <i class="fa fa-duotone fa-trash"></i> Trash </a></b>
</div>
<br>
  <form>
  <br>
  <div>
    <input class="form-control"  wire:model="search" type="text" placeholder="Search users...">
  </div>
</form><br>

<ul class="list-group">
   
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @if($users && $users->count() > 0)
    @foreach($users as $user)
     <tr>
      <td>{{$user->id}} </td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td> 
                <button wire:click="delete({{ $user->id }})" type="button" class="btn btn-danger">Delete</button> 
    </td>
    </tr>  
    @endforeach
@endif
  </tbody>
</table>
</ul>
</div>
</div>








































































