@extends('templates.main')

@section('content')
<div class="row>"
    <div class="col-12">
<h1 class="float-left">Users</h1>
<a class="btn btn-sm btn-success float-right" href={{route('admin.users.create') }}" role="button">Edit</a>



<div class="card">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#<Id/th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Actiond</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach($users as $user)
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user-name}}</td>
      <td>{{$user->email}}/td>
      <td>
          <a class="btn btn-sm btn-primary" href={{route('admin.users.edit', $user->id) }}" role="button">Edit</a>
         <button type="button" class="btn btn-sm btn-danger"> 
             onclick="event.preventDefault();
             document.getElementByID('delete-user-form-{{$user->id}}')">"
             delete
</button>

          <form id="delete-user-form{{ $user->id) }}"method="POST" style="display: none"
        @crsf
        @method("DELETE")
</form>
        </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
{{$users->links()}}
</div>

@endsection