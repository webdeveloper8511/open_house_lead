<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>One House Lead | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}}">
  <!-- favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/dist/img/one-house-logo.jpg')}}">
  <!-- custom css  -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/css/style.css')}}">
  <style>
    .error {
        color: red;
        width: 100%;
    }
  </style>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
      <a href="#">
        <img class="" src="{{ asset('assets/dist/img/one-house-logo.jpg')}}" alt="one-house Logo" height="100" width="100"><br>
        <b>One House</b> Lead</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg"><b>Register</b></p>

      <form action="{{route('register.post')}}" method="post">
        @csrf
        <div class="row">
          <div class="input-group mb-3 col-12 col-md-6">
            <input type="text" name="first_name" value="{{old('first_name')}}" class="form-control" placeholder="First name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            @error('first_name')
                <div class="error">{{ $message }}</div>
            @enderror
          </div>
          <div class="input-group mb-3 col-12 col-md-6">
            <input type="text" name="last_name" value="{{old('last_name')}}" class="form-control" placeholder="Last name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            @error('last_name')
                <div class="error">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row">
            <div class="input-group mb-3 col-12 col-md-6">
            <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
          </div>
          <div class="input-group mb-3 col-12 col-md-6">
            <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register new</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <div class="row">
          <div class="col-12 col-md-6">
            <a href="#" class="btn btn-block btn-primary mb-3 mb-md-0">
              <i class="fab fa-facebook mr-2"></i>
              Sign up using Facebook
            </a>
          </div>
          <div class="col-12 col-md-6">
            <a href="#" class="btn btn-block btn-danger">
              <i class="fab fa-google mr-2"></i> Sign in using Google
            </a>
          </div>
        </div>
      </div>

      <a href="{{route('login')}}" class="text-center">I already have a Account Login</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
