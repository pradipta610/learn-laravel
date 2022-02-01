@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update New User</h1>
  </div>
  <div class="col-lg-8">
    <form method="post" action="/dashboard/users/{{ $users->id }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        {{-- name --}}
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name',$users->name) }}" required autofocus>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>


        {{-- username --}}
        <div class="mb-3">
          <label for="username" class="form-label " >Username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username',$users->username) }}" required>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        {{-- email --}}
        <div class="mb-3">
          <label for="email" class="form-label " >Email</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email',$users->email) }}" required>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        {{-- password --}}
        <div class="mb-3">
          <label for="password" class="form-label " >Password</label>
          <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" required>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        {{-- is_admin --}}
        <div class="mb-3">
          <label for="is_admin" class="form-label">Is_admin</label>
          <select class="form-select" name="is_admin">
            <option value="0" @if ('id_admin' === 0 )  selected @endif >Guest</option>
            <option value="1"  @if ('id_admin' === 1 )  selected @endif>Admin</option>
          </select>
        </div>
  
        <button type="submit" class="btn btn-primary">Update User</button>
      </form>  
  </div>

@endsection