@extends('layouts.base')

@section("title", "Login | User")

@section('menu')
  <h1>here we are displaying menu part</h1>
@endsection

@section('content')

  <div class="p-2 mt-5 col-md-4 offset-md-4">
    <form action="" method="post">
      <div class="mb-2">
        <label class="form-label" for="email">Email: </label>
        <div class="input-group">
          <div class="input-group-text"><i class="fas fa-at"></i></div>
          <input type="text" class="form-control" id="email" placeholder="Your email here">
        </div>
      </div>
      <div class="mb-2">
        <label class="form-label" for="password">Password: </label>
        <div class="input-group">
          <div class="input-group-text"><i class="fas fa-lock"></i></div>
          <input type="text" class="form-control" id="password" placeholder="Your password here">
        </div>
      </div>
      <div class="mt-4 mb-2 form-check">
        <input class="form-check-input" name="chkRemember" type="checkbox" value="" id="remember" checked>
        <label class="form-check-label" for="remember">
          Remember me
        </label>
      </div>
      
      <div class="mt-4 d-grid">
        <button class="btn btn-secondary" type="submit" name="btnSubmit">Login</button>
      </div>
    </form>
    
    {{-- footer for login page --}}
    {{ View::make('layouts.loginFooter') }}
  </div>
@endsection