<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <title>Capstone</title>

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html"><img id="logo" src="images/logo.jfif"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact_us.php">Contact Us</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Shop
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="surfboards.php">SurfBoards</a>
                <a class="dropdown-item" href="skateboards.php">Skateboards</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
    </nav>
    <div>
      <form method="POST" action="php/script.php">
      </form>
    </div>

    <!--php-->
    <?php
      echo "<h1>Skateboard Shop</h1>";
      echo '<div class="container">
      <div class="row" style="display: flex;">
        <div class="col-sm jumbotron" style="position: relative; left: -20px;">
          <a href="https://www.tillys.com/product/retrospec-zed-44-sunset-longboard-skateboard/385276957.html?dwvar_385276957_color=957" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/RETROSPEC_Zed_Sunset_Longboard_Skateboard.png" alt="">
            <p>Detail List</p>
            <ul>
              <li>Name: Retrospec Zed 44" longboard skateboard</li>
              <li>Effortlessly cool and undeniably dapper</li>
              <li>ZED masters both suburban streets and beachside boulevards</li>
              <li>70x51mm PU wheels</li>
              <li>LightweightAaluminum Trucks</li>
              <li>44 sturdy inches of sustainably sourced bamboo and solid Canadian maple</li>
              <li>Weight Limit: 220 lbs</li>
              <li>Is Imported</li>
            </ul>
          </a>
        </div>
        <div class="col-sm jumbotron">
          <a href="https://www.tillys.com/product/retrospec-zed-44-green-flora-longboard-skateboard/385279957.html?dwvar_385279957_color=957" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/RETROSPEC_Zed_Green_Flora_Longboard_Skateboard.png" alt="">
            <p>Detail List</p>
            <ul>
              <li>Name: Retrospec Zed 44" longboard skateboard</li>
              <li>Effortlessly cool and undeniably dapper</li>
              <li>ZED masters both suburban streets and beachside boulevards</li>
              <li>Durable 70x51mm PU wheels</li>
              <li>Lightweight Aluminum Trucks</li>
              <li>44 sturdy inches of sustainably sourced bamboo and solid Canadian maple</li>
              <li>Weight Limit: 220 lbs</li>
            </ul>
          </a>
        </div>
        <div class="col-sm jumbotron "style="position: relative; right: -20px;">
          <a href="https://www.tillys.com/product/retrospec-zed-crimson-rising-44-longboard-skateboard/393800957.html?dwvar_393800957_color=957" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/RETROSPEC_Zed_Crimson_Rising_Longboard_Skateboard.png" alt="">
            <p>Detail List</p>
            <ul>
              <li>Name: Retrospec Zed Crimson Rising 44" Longboard Skateboard<li>
              <li>Effortlessly cool and undeniably dapper</li> 
              <li>ZED masters both suburban streets and beachside boulevards</li> 
              <li>Durable 70x51mm PU wheels</li> 
              <li>Lightweight 7" Aluminum Trucks</li>
              <li>44 sturdy inches of sustainably sourced bamboo and solid Canadian maple</li>
              <li>ABEC-7 Bearings</li>
              <li>Dimensions: 44" x 9.5"</li>
            </ul>
          </a>
        </div>
      </div>
    </div>';
        echo '<div class="container">
      <div class="row" style="display: flex;">
        <div class="col-sm jumbotron" style="position: relative; left: -20px;">
          <a href="https://www.tillys.com/product/retrospec-zed-nighttime-hills-41-longboard-skateboard/393802957.html?dwvar_393802957_color=957" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/RETROSPEC_Zed_Nighttime_Hills_Longboard_Skateboard.png" alt="">
            <p>Detail List</p>
            <ul>
              <li>Name: Retrospec Zed Nighttime Hills 41" Longboard Skateboard. 
              <li>Our freshest longboard nods to mid-century surfer ambitions with a classic surfboard shape and feel</li> 
              <li>ZED weaves California beach nostalgia with 41 inches bamboo and Canadian maple</li>
              <li>70x51mm 85a PU wheels</li>
              <li>ABEC-7 bearings</li> 
              <li>Dimensions: 41" x 9.5"</li>
              <li>Weight Limit: 220 lbs</li>
              <li>Is Imported</li>
            </ul>
          </a>
        </div>
        <div class="col-sm jumbotron">
          <a href="https://www.tillys.com/product/retrospec-zed-pintail-41-whitecaps-longboard-skateboard/38532495701.html" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/RETROSPEC_Zed_Pintail_Whitecaps_Longboard_Skateboard.png" alt="">
            <p>Detail List</p>
            <ul>
              <li>Name: Retrospec Zed Pintail 41" longboard skateboard</li> 
              <li>ZED Pintail weaves California beach nostalgia</li>
              <li>41 inches bamboo and Canadian maple</li> 
              <li>70x51mm 85a PU wheels</li>
              <li>ABEC-7 bearings</li>
              <li>Weight Limit: 220 lbs</li>
              <li>Is Imported</li>
            </ul>
          </a>
        </div>
        <div class="col-sm jumbotron "style="position: relative; right: -20px;">
          <a href="https://www.tillys.com/product/star-wars-element-mandalorian-quad-8.0-complete-skateboard/382828957.html?dwvar_382828957_color=957" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/Star_Wars_Mandalorian_skateboard.png" alt="">
            <p>Detail List</p>
            <ul>
              <li>Name: STAR WARS | ELEMENT Mandalorian Quad 8.0" Complete Skateboard</li>
              <li>7-ply maple deck construction with graphics from The Mandalorian</li> 
              <li>5.25" Element brand trucks</li>
              <li>52mm wheels</li>
              <li>Abec 5 bearings</li>
              <li>Grip tape</li> 
              <li>Dimensions: 8.0" x 31.5</li>
              <li>Is Imported</li>
            </ul>
          </a>
        </div>
      </div>
    </div>';
    echo '<footer class="footer">Caleb Sonnichsens Capstone 2020</footer>';

    ?>
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Own Made JavaScript-->
    <script src="js/script.js"></script>
</body>
</html>