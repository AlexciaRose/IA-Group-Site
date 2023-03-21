<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <!--Stylesheets -->
  <?php 
        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">';
        echo '<link rel="stylesheet" href="Styles/home.css">';
  ?>

    <title>ToyBarn</title>
</head>
<body>
    
<?php
if(isset($_SESSION["username"]) && !empty($_SESSION["username"])) { $username = $_SESSION["username"];?>

        <nav class="navbar navbar-expand-lg bg-light bg-opacity-50">
                <div class="container-fluid">
                <span class="navbar-brand1 mb-0 h1" style="color:rgba(241, 70, 104, 1)">Toy<span style="color: black;">Barn</span></span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" style="margin-left:100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <ul class="navbar-nav" style="margin-left:500px;">
                        
                        <span class="navbar-text" style="color:rgba(202, 63, 19, 1); font-weight:bold;">Welcome, <?php echo $username; ?>!</span>
                        
                        <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>              
                    </ul>
                </div>
                </div>
            </nav>
<?php
} else {echo 'You are not logged in';} 
?>

    <div class="container">
        <div class="row horse">
            <div class="col-4">
                <img class="img-fluid" src="./Images/horse.png" alt="">
            </div>
            <div class="col text-center">
                <h1>Bringing <br> Playtime to Your Doorstep</h1>
                <p>Whether you're looking for educational toys, outdoor toys, board games, or action figures, we have it all!</p>
                <a class="btn btn-primary1" href="products.php" role="button">Get Your Toys</a>
            </div>
        </div>
    </div>

    <section class="brand text-center mb-5">
        <img class="" src="./Images/brand.png" alt="">
        <div class="row mt-5">
            <div class="col">
                <img src="./Images/selfie.png" alt="">
            </div>
            <div class="col">
                <img src="./Images/gabby.png" alt="">
            </div>
            <div class="col">
                <img style="margin-top:110px; margin-right:100px;" src="./Images/cast.png" alt="">
            </div>
        </div>

        <div class="marvel2 mt-5">
            <div class="card p-1" style="width: 18rem; background-color: transparent; ">
              <img src="WebImg/playpack.png" class="card-img-top" alt="..." >
              <div class="card-body">
                <p class="card-text" style="font-size:16px; font-weight:bold; color:black;">Gabby's Play Pack</p>
                <p class="card-text"  style="rgba(88, 69, 177, 1)"><strong>$3,000.00</strong></p>
                <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">
              </div>
            </div>

            <div class="card p-1" style="width: 18rem; background-color: transparent; ">
              <img src="WebImg/poolparty.png" class="card-img-top" alt="..." style="height:280px">
              <div class="card-body">
              <p class="card-text" style="font-size:16px; font-weight:bold; color:black;">Gabby's Pool Party Playset</p>
                <p class="card-text" style="rgba(88, 69, 177, 1)"><strong>$3,000.00</strong></p>
                <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">
              </div>
            </div>

            <div class="card p-1" style="width: 18rem; background-color: transparent; ">
              <img src="WebImg/gabbag.png" class="card-img-top" alt="..." >
              <div class="card-body">
                <p class="card-text" style="font-size:16px; font-weight:bold; color:black;">Gabby’s Bag-o-Accessories</p>
                <p class="card-text"  style="rgba(88, 69, 177, 1)"><strong>$3,000.00</strong></p>
                <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">
              </div>
            </div>

          </div>

    </section>


    <section class= "container reviews_bg p-5 text-center">
        <div class="reviews_img"><img src="./Images/collage.png" alt=""></div>
    </section>

    <section class="mt-5">
  <!-- Footer -->
  <footer class="text-center text-white mt-5" style="background-color: rgba(159, 87, 215, 0.62)">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
            <p class="d-flex justify-content-center align-items-center">
                <span class="me-3">Happy Shopping!</span>
              </p>
      </section>
      <!-- Section: CTA -->
    </div>


    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="">ToyBarn</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script>
function displayMessage()
{
alert("We apologize, We are currently out of stock on this item");
}
</script>
</body>
</html>