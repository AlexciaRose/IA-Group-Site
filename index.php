<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">';
        
  ?>
<style>
  <?php
    include 'Styles/landing.css'
  ?>
</style>

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
                <a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
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
}

else{?>

<nav class="navbar navbar-expand-lg bg-light bg-opacity-50">
        <div class="container-fluid">
        <span class="navbar-brand mb-0 h1" style="color:rgba(241, 70, 104, 1);" >Toy<span style="color: black;">Barn</span></span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Sign In</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="create.php">Register</a>
                </li>
              </ul>  
            </div> 
        </div>
      </nav>

<?php
}?>


   

      <main>
        <div class="container">
          <h1 style="margin-top:12%; margin-left:25%;">We distribute</h1>
            <div style="width:230px; height:120px" class="toyheading">
              <h1 class="text-center" style="">toys</h1>
            </div>
          <h1 class="text-center" style="margin-top:-10px; margin-left:200px;">to your home</h1>
        </div>
        

        <div class="container">
          <div class="row start-info">
            <div class="col">
            <img src="./Images/Kidplane.png" class="img-fluid" alt="">
            </div>
            <div class="col mt-5">
              <h2>Unleash their <span style="color:rgba(88, 69, 177, 1)">imagination!</span></h2>
              <p>Our toys are made with love and care, using only the highest quality materials to ensure that they last for years of fun and adventure. 
                Whether you're shopping for a birthday gift or just looking to add some excitement to your child's playtime, ToyBarn has got you covered.</p>
              <?php if(isset($_SESSION["username"]) && !empty($_SESSION["username"])) { ?>
                <a class="btn btn-primary" href="products.php" role="button">Get Your Toys</a>
             <?php } else {?> 
              <a class="btn btn-primary" href="create.php" role="button">Get Your Toys</a>
              <?php
              }?>
                
            </div>
          </div>
        </div>

        <section class="container-fluid text-center buy-info pt-5 pb-5">
              How to Buy?
              <div class="row">
                <div class="col-4">
                  <img src="./Images/spintop.png" class="img-fluid" alt="">
                  <h3 class="mt-2">Choose Your Toys</h3>
                  <p>Pick from classic favorites to the latest and greatest in the toy world.</p>
                </div>
                <div class="col-4">
                  <img src="./Images/animals.png" class="img-fluid" alt="">
                  <h3 class="mt-2">Pay Online</h3>
                  <p>Set your delivery address and confirm.</p>
                </div>
                <div class="col-4">
                  <img src="./Images/baby.png" class="img-fluid" alt="">
                  <h3 class="mt-2">Play!</h3>
                  <p>Orders are delivered straight to your doorstep.</p>
                </div>
              </div>
          </section>

          <div class="container ext">
          <div class="row ext-info">
            <div class="col mt-5">
              <h2>Our Mission</h2>
              <p>ToyBarn is your one-stop-shop for quality toys delivered right to your doorstep! 
                At ToyBarn, we believe that playtime should be full of joy and laughter, which is why we are dedicated to providing you with the best toys in the business.</p>
                <?php if(isset($_SESSION["username"]) && !empty($_SESSION["username"])) { ?>
                <a class="btn btn-primary" href="products.php" role="button">Get Your Toys</a>
             <?php } else {?> 
              <a class="btn btn-primary" href="create.php" role="button">Get Your Toys</a>
              <?php
              }?>
            </div>
            <div class="col">
            <img src="./Images/girljump.png" class="img-fluid" alt="">
            </div>
          </div>
        </div>

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

      </main>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>