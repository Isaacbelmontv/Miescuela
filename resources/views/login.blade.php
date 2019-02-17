<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css" >
    <title>login</title>
  </head>
  <body>
    <div class="login-page">
      <div class="form">
        <form class="register-form">
          <input type="text" placeholder="name"/>
          <input type="password" placeholder="password"/>
          <input type="text" placeholder="email address"/>
          <button>create</button>
          <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form">
          <input type="text" placeholder="usuario"/>
          <input type="password" placeholder="contraseña"/>
          <button>login</button>
        </form>
      </div>
    </div>
  </body>
      <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
</html>
