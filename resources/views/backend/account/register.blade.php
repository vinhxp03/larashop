<!doctype html>
<html lang="en">
  <!-- Mirrored from cosmoadmin.com/preview/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Nov 2018 05:11:50 GMT -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{asset('')}}">
    <!-- Base CSS -->
    <link rel="stylesheet" href="backend/css/basestyle/style.css">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Fontawesome Icons -->
    <link href="backend/css/fontawesome/fontawesome-all.min.css" rel="stylesheet">
    <link href="backend/css/pages/login.css" rel="stylesheet">
    <style>
      /*error form*/
      .error {
        color: #ff0040;
        margin-left: 5px;
        margin-top: 2px;
      }
    </style>
    <title>Cosmo - Responsive Dashboard Admin Template</title>
  </head>
  <body>
    <section class="wrapper">
      <div class="login">
        <div class="image-placeholder">
          <h1>Lorem ipsum dolor sit amet<br>consectetur pellentesque adipiscing elit.</h1>
        </div>
        <div class="form">
          <div class="text-center mb-4"><span class="material-icons text-danger" style="font-size:6rem;" >wifi_tethering</span></div>
          <h3 class="h4 mb-5 text-center">Create Account</h3>
          @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }} <a href="{{ url('admin/login')}}">Login</a></div>
          @endif
          <form action="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputEmail1">Full Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="Name" placeholder="Enter name" value="{{ old('name') }}">
              @if ($errors->has('name'))
                <div class="error">{{ $errors->first('name') }}</div>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email </label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">
              @if ($errors->has('email'))
                <div class="error">{{ $errors->first('email') }}</div>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Phone </label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="Phone" placeholder="Enter phone" value="{{ old('phone') }}">
              @if ($errors->has('phone'))
                <div class="error">{{ $errors->first('phone') }}</div>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password">
              @if ($errors->has('pass'))
                <div class="error">{{ $errors->first('pass') }}</div>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Re Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="re_pass" placeholder="Password">
              @if ($errors->has('re_pass'))
                <div class="error">{{ $errors->first('re_pass') }}</div>
              @endif
            </div>
            <input type="submit" class="btn mt-4 btn-primary btn-block" value="Sign Up">
          </form>
        </div>
      </div>
    </section>
    <div class="modal fade " id="forgotPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-title" id="exampleModalLabel">Forgot Your Password ?</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email or Username</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Reset Password</button>
          </div>
        </div>
      </div>
    </div>
    <script src="backend/js/jquery-3.3.1.slim.min.html"></script>
    <script src="backend/js/popper.min.html"></script>
    <script src="backend/js/bootstrap/bootstrap.min.js"></script>
    <script src="backend/js/custom.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56821827-7"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      
      gtag('config', 'UA-56821827-7');
    </script>
  </body>
  <!-- Mirrored from cosmoadmin.com/preview/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Nov 2018 05:11:50 GMT -->
</html>