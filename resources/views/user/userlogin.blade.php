<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Login Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!----CSS link----->
    <link rel="stylesheet" href="../assets/css/userlogin.css">
  </head>
  <body>

  <form class="form form-login" action="/userAuth" method="POST">
        @csrf
    

    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
      <div class="container">
        <div class="card login-card">
          <div class="row no-gutters">
            <div class="col-md-5">
              <img src="assets/Photography  Videography.png" width="500" height="200" class="login-card-img">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <div class="brand-wrapper">
              <center>
                  <img src="assets/picxellence.png"class="logo">
</center>
                </div>
                <center>
                <p class="login-card-description">Sign into your account</p>
</center>
                <form action="#!">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group mb-4">
                    <label for="Password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                  </div>
                  <input name="submit" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">

                 <!-- <center>
            <button type="submit" class= "btn btn-primary "> login </button>  
          </center>-->


                </form>
                <a href="signupform" class="forgot-password-link">Forgot password</a>
                <p class="login-card-footer-text">Don't have an account? <a href="signupform" class="text-reset">Register here</a></p>
                <nav class="login-card-footer-nav">
                <center>
            <a href="adminlogin" style="color:Black" class="btn mt-n1">Admin Login</a>
            <br>
            <a href="#" style="color:black" class="btn mt-n1">Forgot password?</a>
            <br>
               </center>
                  <a href="#!">Developed by.</a>
                  <a href="#!">Algen&Me</a>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

  </body>
</html>