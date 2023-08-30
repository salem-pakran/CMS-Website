
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Log in </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("admin_theme/adminlte/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- icheck bootstrap -->

  <link rel="stylesheet" href= "{{asset("admin_theme/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("admin_theme/adminlte/dist/css/adminlte.min.css")}}">
</head>
<body class="hold-transition login-page">

  @if ($errors->any())
    <div class='alert alert-danger'>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </div>
  @endif

<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Admin</b></a>
    </div>

    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{asset('admin')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name='username' class="form-control" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name='password' class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- jQuery -->
<script src="{{asset("admin_theme/adminlte/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("admin_theme/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("admin_theme/adminlte/dist/js/adminlte.min.js")}}"></script>
</body>
</html>
