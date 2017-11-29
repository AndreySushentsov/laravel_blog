<template>
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
</template>

<script>
    export default {
        methods:{

        }
    }
</script>

<style>

</style>