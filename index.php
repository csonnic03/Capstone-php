<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
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
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Shop
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">SurfBoards</a>
                <a class="dropdown-item" href="#">SurfBoarding Gear</a>
                <a class="dropdown-item" href="#">Skateboards</a>
                <a class="dropdown-item" href="#">SkateBoarding Gear</a>
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
      echo "<h1>Welcome to SkateWave</h1>";
      echo '<div class="slideshow-container">
        <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img1.jpg" style="width:100%">
        <div class="text">Caption Text</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="img2.jpg" style="width:100%">
        <div class="text">Caption Two</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="img3.jpg" style="width:100%">
        <div class="text">Caption Three</div>
      </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>'
      echo '<div class="container">
      <div class="row">
        <div class="col">
          
        </div>
        <div class="col">
          <p>At SkateWave, we have SkateBoards, Skating Gear, Surfboards, and Surfboarding Gear. We havw a range of different brands and types of Skateboards and Surfboards. We have everything that relates to the surfing and skating. So come on and look around our store</p>
        </div>
        <div class="col">
          
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