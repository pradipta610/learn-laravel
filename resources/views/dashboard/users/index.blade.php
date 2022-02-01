@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Users</h1>
</div>


@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif


<div class="table-responsive">
  <a href="users/create" class="btn btn-primary mb-3">Create New user</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Is Admin</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->email }}</td>
        <td>{{($user->is_admin) ?  "Admin" :  "Guest"  }}</td>
        <td>
            <a href="/dashboard/users/{{ $user->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            {{-- delete --}}
            
            <form action="/dashboard/users/{{ $user->id }}" class="d-inline" method="post">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0 "    onclick="return confirm('yakin mau menghapus post dengan id `{{ $user->id }}` judul `{{ $user->name }}`')" ><span data-feather="x-circle"> </span></button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>



@endsection


