<template>
  <div>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand" href="/">
            Learn Laravel
          </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
            <li> <a href=/about/>About</a>
            </li>
            <li> <a href=/posts/>Blog</a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" @click="showClientLoginForm()">Login</a></li>
            <li><a href="#" @click="showClientRegisterFrom()">Register</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Login Form-->
      <div class="panel panel-default modal fade login-form__modal-wrapper" id="loginForm">
        <div class="panel-heading">Login</div>
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="">
            <div class="form-group">
              <label for="email" class="col-md-4 control-label">E-Mail Address</label>
              <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="col-md-4 control-label">Password</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember"> Remember Me
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Login
                </button>

                <a class="btn btn-link" href="#">
                  Forgot Your Password?
                </a>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>

      <!-- Register Form -->
      <div class="panel panel-default modal fade register-form__modal-wrapper" id="registerForm">
        <div class="panel-heading">Register</div>
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="">
            <div class="form-group">
              <label for="name" class="col-md-4 control-label">Name</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
              </div>
            </div>

            <div class="form-group">
              <label for="email_reg" class="col-md-4 control-label">E-Mail Address</label>

              <div class="col-md-6">
                <input id="email_reg" type="email" class="form-control" name="email" value="" required>
              </div>
            </div>

            <div class="form-group">
              <label for="password_reg" class="col-md-4 control-label">Password</label>

              <div class="col-md-6">
                <input id="password_reg" type="password" class="form-control" name="password" required>
              </div>
            </div>

            <div class="form-group">
              <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Register
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</template>

<script>
    export default {
      methods:{
          showClientLoginForm () {
              $('#loginForm').modal('show');
          },
          showClientRegisterFrom (){
            $('#registerForm').modal('show');
          }
      }
    }
</script>

<style>
  .login-form__modal-wrapper, .register-form__modal-wrapper{
    width:50%;
    height:60%;
    position: absolute;
    left: 50%;
    top: 50%;
    transform:translate(-50%, -50%);
  }
  .register-form__modal-wrapper{
    height: 70%;
  }
  .panel-body{
    padding-bottom:0;
  }
</style>