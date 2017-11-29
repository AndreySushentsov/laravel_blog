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
            <li><a href="#" @click="showClientLoginForm">Login</a></li>
            <li><a href="#" @click="showClientRegisterFrom">Register</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Login Form-->
    <login></login>
    <!-- Register Form -->
    <registration></registration>
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

</style>