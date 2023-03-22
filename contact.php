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
        echo '<link rel="stylesheet" href="Styles/login.css">';
        echo '<link rel="stylesheet" href="Styles/home.css">';
  ?>
   
   
    <title>ToyBarn - Contact</title>
</head>
<body>
  <!--Navbar-->
  <?php
if(isset($_SESSION["username"]) && !empty($_SESSION["username"])) { $username = $_SESSION["username"];?>

        <nav class="navbar navbar-expand-lg bg-light bg-opacity-100">
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


      <?php
  //defining variables
  $firstName = $lastName = $useremail = $message = "";
  $firstNameErr =  $lastNameErr = $emailErr = $messageErr = "";
  $pattern ="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

  function test_input($data) { //removes unnecessary characters
    $data = trim($data);
    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {


  //Validate names
  if (empty($_POST["firstName"])) {
    $firstNameErr = "First Name is required";
  } 
  else {
    $firstName = test_input($_POST["firstName"]);
  }

  if (empty($_POST["lastName"])) {
    $lastNameErr = "Last Name is required";
  } 
  else {
    $lastName = test_input($_POST["lastName"]);
  }

  //Validate email
  if (empty($_POST["useremail"])) {
    $emailErr = "Email is required";
  } 
  else {
    $useremail = test_input($_POST["useremail"]);
    if(!preg_match ($pattern, $useremail)){
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["message"])) {
    $messageErr  = "Message required";
  } 
  else {
    $message  = test_input($_POST["message"]);
  }



  if ($firstNameErr == "" && $lastNameErr == "" && $emailErr == "" && $messageErr == "" ){

    // Open file for writing (create it if it doesn't exist)
    $file = fopen("contact.txt", "a") or die("Unable to open file!");
    
    // Write username and password to file
    fwrite($file, $firstName . "," . $lastName . "," . $useremail ."," . $message .  "\n");
    
    // Close file
    fclose($file);

    header("Location: contact.php");
exit();
  }


} ?>


      <section class="bg-set">
        <div class="container-fluid vh-100">
            <div class="row d-flex vh-100">
                <div class="col-md-8 col-12 login">

                <!--HTML Form-->
                    <form style="margin:auto;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                      <header style="color:rgba(88, 69, 177, 1); font-size: 40px; font-weight:bold; margin-top:20%;" class="mb-4 text-center" >Get in Touch</header>

                      <div class="form-group row">
                        <div class="col ms-2">
                            <label for="firstName" class="form-label mb-0">First Name</label> <br>
                            <input type="text" class="form-control" name="firstName" placeholder="First Name" required>
                            <?php if (isset($firstNameErr)) { ?>
                          <span class="error" style="font-size:10px; color:red;"><?php echo $firstNameErr; ?></span>
                        <?php } ?>
                        </div>
                        <div class="col ms-2">
                            <label for="lastName" class="form-label mb-0">Last Name</label> <br>
                            <input type="text" class="form-control" name="lastName" placeholder="Last Name" required>
                            <?php if (isset($lastNameErr)) { ?>
                          <span class="error" style="font-size:10px; color:red;"><?php echo $lastNameErr; ?></span>
                        <?php } ?>
                        </div> 
                      </div>
     
                      <div class="form-group col ms-2"> 
                        <label for="useremail" class="form-label mb-0 mt-4">Email</label> <br>
                        <input type="email" class="form-control" name="useremail" placeholder="Email" required>
                        <?php if (isset($emailErr)) { ?>
                          <span class="error" style="font-size:10px; color:red;"><?php echo $emailErr; ?></span>
                        <?php } ?>
                      </div>

                      <div class="form-group col ms-2"> 
                        <label for="message" class="form-label mb-0 mt-4">Message</label> <br>
                        <textarea name="message" class="formcontrol" id="message" cols="50" rows="5" placeholder="Type Your Message" required></textarea> 
                        <?php if (isset($messageErr)) { ?>
                          <span class="error" style="font-size:10px; color:red;"><?php echo $messageErr; ?></span>
                        <?php } ?>
                      </div>
                        
                      <div class="form-group col ms-2">
                            <input type="submit" class="btn btn-sign mb-2 mt-4" value="Submit">
                        </div>
                        
                                     
                    </form>
                </div>
                
                <div class="col-4 bg-light d-none d-md-block d-xl-block d-xxl-block"> 
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3793.8833550396907!2d-77.50494138887329!3d18.030616183885275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTjCsDAxJzUwLjIiTiA3N8KwMzAnMDguNSJX!5e0!3m2!1sen!2sjm!4v1679418067938!5m2!1sen!2sjm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <br><br> <br> <h5> Telephone Number: 1 (876) 854-9685  </h5>
                </div>
            </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>