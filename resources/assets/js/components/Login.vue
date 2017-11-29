<template>
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
</template>

<script>
    export default {

    }
</script>

<style>

</style>