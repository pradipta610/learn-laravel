@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Categories</h1>
</div>


@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif


<div class="table-responsive">
  <a href="categories/create" class="btn btn-primary mb-3">Create New Category</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Category Title</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $category->name }}</td>
        <td>
            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            {{-- delete --}}
            
            <form action="/dashboard/categories/{{ $category->slug }}" class="d-inline" method="post">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0 "    onclick="return confirm('yakin mau menghapus post dengan id `{{ $category->id }}` judul `{{ $category->name }}`')" ><span data-feather="x-circle"> </span></button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>



@endsection


