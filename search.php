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
        echo '<link rel="stylesheet" href="Styles/styleprod.css">';
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
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">About Us</a>
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
} else {echo 'You are not logged in';} 
?>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        
      
            <form action="" method="post">
              <label for="search">Search:</label>
              <input type="text" id="name" name="name" placeholder="Product name"> <br>
              <label for="price-min">Min Price:</label>
              <input type="number" id="price-min" name="price_min" placeholder="0" class="col-1">
              <label for="price-max">Max Price:</label>
              <input type="number" id="price-max" name="price_max" placeholder="10000" class="col-1">
              <button type="submit">Search</button>
            </form>

<?php 
    require 'connection.php';
    $conn = Connect();

    // Check if the search form was submitted
if (isset($_POST['search'])) {

    $name = $_POST['name'];
    $min_price = $_POST['price-min'];
    $max_price = $_POST['price-max'];

    
    $sql = "SELECT * FROM productinfo WHERE Name LIKE '%$name%' AND Price >= '$min_price' AND Price <= '$max_price'";
    $result = mysqli_query($conn, $sql);

    // Display the search results
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo '<div class="product">';
            echo '<h2>' . $row["Name"] . '</h2>';
            echo '<p>' . $row["ProductDesc"] . '</p>';
            echo '<p>Price: $' . $row["Price"] . '</p>';
            echo '<p>Rating: ' . $row["Rating"] . '</p>';
            echo '</div>';
        }
    } else {
        echo "No products found.";
    }
}

// Close the database connection
$conn->close();
?>


<script>
function displayMessage()
{
alert("We apologize, We are currently out of stock on this item");
}
</script>



    </div>
      <br> <br> <br>
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
      
    </body>
</html>