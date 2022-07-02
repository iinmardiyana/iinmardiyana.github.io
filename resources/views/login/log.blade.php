@extends('layout.mainnav')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">

      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> 
      @endif

      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> 
      @endif

      <main class="form-signin">
            <form action="/login_verifikasi" method="post">
              @csrf
              <center><img class="mb-4" src={{ asset('img/lg.png') }} alt="" width="100" height="100"></center>
              <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
          
              <form action="/login_verifikasi" method="post">
              <div class="form-floating">
                <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" autofocus required value="{{ old('username') }}">
                <label for="floatingInput">Username</label>
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>

            <small class="d-block text-center mt-3">Don't have an account?<a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>

@endsection