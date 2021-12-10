@extends('layout.main')
@extends('layout.navbar')
@section('container')
    <div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4 text-center">Registration Form</h3>

              <!-- Sign In Form -->
              <form method="POST" action="/register">
                @csrf
                <div class="form-floating mb-3">
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"  placeholder="Albert Steven" value="{{ old('name') }}">
                  <label for="name">Name</label>
                  <div class="invalid-feedback">
                      @error('name')
                      {{ $message }}   
                      @enderror
                  </div>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" " id="username" placeholder="username" value="{{ old('username') }}">
                  <label for="username">Username</label>
                  <div class="invalid-feedback">
                    @error('username')
                    {{ $message }}   
                    @enderror
                </div>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" " id="email" placeholder="name@example.com" value="{{ old('email') }}">
                  <label for="email">Email address</label>
                  <div class="invalid-feedback">
                    @error('email')
                    {{ $message }}   
                    @enderror
                </div>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" " id="password" placeholder="Password">
                  <label for="password">Password</label>
                  <div class="invalid-feedback">
                    @error('password')
                    {{ $message }}   
                    @enderror
                </div>
                </div>

                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Sign Up</button>
                  <div class="text-center">
                   <small>Have Account? <a class="text-decoration-none" href="/login">Sign In</a></small> 
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection