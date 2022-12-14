<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
    .link-unstyled, .link-unstyled:link, .link-unstyled:hover {
      color: inherit;
      text-decoration: inherit;
    }
    </style>
  </head>
  <body style="background-color: white; min-height: 100vh;">

    <!-- NAV TO BE INCLUDED -->
    <!-- <nav class="navbar sticky-top navbar-dark bg-dark navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="media/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
          Charter
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav text-end">
            <a class="nav-link active" aria-current="page" href="#">Weekly Charts</a>
            <a class="nav-link" href="#">Subscriptions</a>
            <a class="nav-link disabled" href="myCharts.html">My Charts</a>
            <a class="nav-link" href="#">Settings</a>
          </div>
        </div>
      </div>
    </nav> -->
    <?php include "./nav.html" ?>
    <!-- NAV TO BE INCLUDED -->
    <h1 class="text-dark" style="text-align: center;">Your Weekly Charts</h1>
      <div class="container">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-3"> <!-- Row -->

          <!-- V Cards To Be Added Here V -->

          <!-- Card 1 -->
          <a href="#" class="link-unstyled" data-bs-toggle="modal" data-bs-target="#cardModal">
            <div class="col">
              <div class="card h-100 shadow">
                <img src="media/chart.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h6 class="text-warning">#4 This Week</h6> <!-- Trending # -->
                  <h5 class="card-title">$F</h5> <!-- Title -->
                  <span class="card-text text-danger">Bearish</span> <!-- Sentiment -->
                  <p class="card-text">$15 9/30 Put @ 0.65</p> <!-- Strategy -->
                </div>
              </div>
            </div>
          </a>

          <!-- Card 2 -->
          <a href="#" class="link-unstyled" data-bs-toggle="modal" data-bs-target="#cardModal">
            <div class="col">
              <div class="card h-100 shadow">
                <img src="media/chart2.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h6 class="text-warning">#12 This Week</h6> <!-- Trending # -->
                  <h5 class="card-title">$SNAP</h5> <!-- Title -->
                  <span class="card-text text-success">Bullish</span> <!-- Sentiment -->
                  <p class="card-text">$11 3/30/23 Call @ 0.85</p> <!-- Strategy -->
                </div>
              </div>
            </div>
          </a>

          <!-- Card 3 -->
          <a href="#" class="link-unstyled" data-bs-toggle="modal" data-bs-target="#cardModal">
            <div class="col">
              <div class="card" aria-hidden="true">
                <img src="media/Blank Chart.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title placeholder-glow">
                  +2 for $3.99
                  </h5>
                  <p class="card-text placeholder-glow">
                    <span class="placeholder col-7"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-6"></span>
                    <span class="placeholder col-8"></span>
                  </p>
                </div>
              </div>
            </div>
          </a>

          <!-- Card 4 -->
          <a href="#" class="link-unstyled" data-bs-toggle="modal" data-bs-target="#cardModal">
            <div class="col">
              <div class="card" aria-hidden="true">
                <img src="media/Blank Chart.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title placeholder-glow">
                    +4 for $4.99
                  </h5>
                  <p class="card-text placeholder-glow">
                    <span class="placeholder col-7"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-6"></span>
                    <span class="placeholder col-8"></span>
                  </p>
                </div>
              </div>
            </div>
          </a>

          <!-- ^ Cards To Be Added Here ^ -->

        </div> <!-- Row -->

        <!-- cardModal -->
        <div class="modal fade" id="cardModal" tabindex="-1" aria-labelledby="cardModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="cardModalLabel">$F Strategy</h5> <!-- Ticker -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body"> <!-- Modal Body -->

                <!-- V Expanded Card Goes Here V -->

                <div class="card">
                  <img src="media/chart.png" class="card-img-top img-fluid" alt="...">
                  <div class="card-body">
                    <h6 class="text-warning">#4 This Week</h6> <!-- Trending # -->
                    <h5 class="card-title">$F</h5> <!-- Ticker # -->
                    <span class="card-text text-danger">Bearish</span><p class="card-text">$15 9/30 Put @ 0.65</p> <!-- Sentiment -->

                    <div class="row">
                      <div class="col text-left">
                        <a href="#" class="btn btn-dark" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#moreInfoModal">More Info</a>
                      </div>
                      <div class="col-3 text-center">
                        <a href="#" class="btn btn-success">236????</a> <!-- Upvotes -->
                      </div>
                      <div class="col-3 text-center">
                        <a href="#" class="btn btn-danger">22????</a> <!-- Downvotes -->
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ^ Expanded Card Goes Here ^ -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                </div> <!-- Modal Footer -->
              </div> <!-- Modal Body -->
            </div>
          </div>
        </div> <!-- Modal -->

        <!-- moreInfoModal -->
        <div class="modal fade" id="moreInfoModal" tabindex="-1" aria-labelledby="moreInfoModalLabel" aria-hidden="true">
          <div class="modal-dialog" style="max-width: 80%;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="moreInfoModalLabel">$F Strategy</h5> <!-- Ticker -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body"> <!-- Modal Body -->

                <!-- V More Info Goes Here V -->
                <div class="row">
                  <div class="col-4">
                    <div class="card">
                      <img src="media/chart.png" class="card-img-top img-fluid" alt="...">
                      <div class="card-body">
                        <h6 class="text-warning">#4 This Week</h6> <!-- Trending # -->
                        <h5 class="card-title">$F</h5> <!-- Ticker # -->
                        <span class="card-text text-danger">Bearish</span><p class="card-text">$15 9/30 Put @ 0.65</p> <!-- Sentiment -->

                        <div class="row">
                          <div class="col text-end">
                            <a href="#" class="btn btn-success">236????</a> <!-- Upvotes -->
                          </div>
                          <div class="col text-start">
                            <a href="#" class="btn btn-danger">22????</a> <!-- Downvotes -->
                          </div>
                        </div>
                      </div>
                    </div><!-- Card -->
                  </div> <!-- Col -->

                  <div class="col-3">
                    <h3 class="text-center">$F Strategy</h3>
                    <h5 class="text-center">Submitted By X</h5>
                    <p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text </p>
                  </div>
                  <di class="col-5" style="border-left: 1px solid #dee2e6; overflow-y: scroll;">
                    <h3 class="text-center">Comments</h3>
                    <hr>
                    <div class="row" style="align-items: center;">
                      <div class="col-7""><span style="font-weight: 700;">Jacob: </span><span>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text </span></div>
                      <div class="col-5">
                        <a href="#" class="btn btn-success">6????</a>
                        <a href="#" class="btn btn-danger">12????</a>
                        <a href="#" class="btn btn-danger">???</a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ^ More Info Goes Here ^ -->

              <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
              </div> <!-- Modal Footer -->
            </div> <!-- Modal Body -->
            </div>
          </div>
        </div> <!-- Modal -->

      </div> <!-- Container -->
   <?php
     $server = "localhost";
       $username = "root";  
       $password = "";  
       $dbname = "charter";
       $conn = mysqli_connect($server, $username, $password, $dbname);      

       $id = uniqid();
       if(isset($_POST["submit"])){
            $email = $_POST["name"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $hash = password_hash($password,  
            PASSWORD_DEFAULT); 

            $query = "insert into users(id,email,username,password) values('$id','$email','$username', '$hash')";

            $run = mysqli_query($conn, $query) or die(mysqli_error($conn));
       }
?>
  </body>
</html>
