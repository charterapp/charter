<!DOCTYPE html>
<html lang="en" dir="ltr" class="bg-dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
    .link-unstyled, .link-unstyled:link, .link-unstyled:hover {
      color: inherit;
      text-decoration: inherit;
    }
    </style>
  </head>
  <body style="background-image: linear-gradient(to bottom right, grey, black); min-height: 100vh;">

    <!-- Sign In/Up Nav -->
    <nav class="navbar sticky-top navbar-dark bg-dark navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="media/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
          Charter
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="flex-direction:row-reverse;">
          <div class="navbar-nav text-end float-end">
            <a class="nav-link" aria-current="page" href="charter/charter.php">Sign Up</a>
            <a class="nav-link active" href="#">Log In</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Sign In/Up Nav -->

      <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
          <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border-dark rounded-3 bg-dark" action="weeklyCharts.php" method="post">
              <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Username">
                <label for="floatingInput">Email/Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control"name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <div class="checkbox mb-3">
                <label class="text-light">
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary"  name="submit" id="sign-up" type="submit">Sign In</button>
              <hr class="my-4">
              <small class="text-muted">By signing in, you agree to the terms of use.</small>
            </form>
          </div>
        </div>
      </div>

    <script>
 </script>
  </body>
</html>
