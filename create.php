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
  ?>
   
   
    <title>ToyBarn - Login</title>
</head>
<body>
  <!--Navbar (no link)-->
    <nav class="navbar bg-transparent">
        <div class="container-fluid">
        <a href="index.php" style="text-decoration:none; "><span class="navbar-brand mb-0 h1" style="color:rgba(241, 70, 104, 1)">Toy<span style="color: black;">Barn</span></span></a>
        </div>
      </nav>


      <?php
  //defining variables
  $firstName = $lastName =  $username = $password = $useremail= $password_confirm = "";
  $firstNameErr =  $lastNameErr = $emailErr = $usernameErr = $passwordErr =  $passwordConfirmErr = "";
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

   // Validate username
   if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } 
  else {
    $username = test_input($_POST["username"]);
    // Check if username contains only letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $usernameErr = "Only letters and white space allowed";
    }
  }

  // Validate password
  if (empty($_POST["userpassword"])) {
    $passwordErr = "Password is required";
  } 
  else {
    $password = test_input($_POST["userpassword"]);
    // Check if password length is at least 8 characters
    if (strlen($password) < 8) {
      $passwordErr = "Password must be at least 8 characters";
    }
  }

  //Match passwords
$password_confirm = test_input($_POST["password_confirm"]);
if (empty($password_confirm)) {
  $passwordConfirmErr = "Please confirm your password";
} 
elseif ($password != $password_confirm) {
  $passwordConfirmErr = "Passwords do not match";
}



  if ($firstNameErr == "" && $lastNameErr == "" && $emailErr == "" && $usernameErr == "" && $passwordErr == "" && $passwordConfirmErr == "" ){

    // Open file for writing (create it if it doesn't exist)
    $file = fopen("register.txt", "a") or die("Unable to open file!");
    
    // Write username and password to file
    fwrite($file, $firstName . "," . $lastName . "," . $username . "," . $useremail ."," . $password .  "\n");
    
    // Close file
    fclose($file);

    //sets session variable
    $_SESSION["username"] = $username;
    header("Location: index.php");
exit();
  }


} ?>


      <section class="bg-set">
        <div class="container-fluid vh-100">
            <div class="row d-flex vh-100">
                <div class="col-md-8 col-12 login">

                <!--HTML Form-->
                    <form style="margin:auto;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                      <header style="color:rgba(88, 69, 177, 1); font-size: 40px; font-weight:bold; margin-top:20%;" class="mb-4 text-center" >Create account</header>

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
                        <label for="username" class="form-label mb-0 mt-4">Username</label> <br>
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                        <?php if (isset($usernameErr)) { ?>
                          <span class="error" style="font-size:10px; color:red;"><?php echo $usernameErr; ?></span>
                        <?php } ?>
                      </div>
                      <div class="form-group col ms-2">
                        <label for="userpassword" class="form-label mb-0 mt-4">Password</label> <br>
                        <input type="password" class="form-control" name="userpassword" placeholder="Password" required>
                        <?php if (isset($passwordErr)) { ?>
                          <span class="error" style="font-size:10px; color:red;"><?php echo $passwordErr; ?></span>
                        <?php } ?>
                      </div>
                      <div class="form-group col ms-2">
                        <label for="password_confirm" class="form-label mb-0 mt-4">Confirm Password</label> <br>
                        <input type="password" class="form-control" name="password_confirm" placeholder="Confirm Password" required>
                        <?php if (isset($passwordConfirmErr)) { ?>
                          <span class="error" style="font-size:10px; color:red;"><?php echo $passwordConfirmErr; ?></span>
                        <?php } ?>
                      </div>


                      <div class="form-group col ms-3" >
                        <input type="checkbox" name="remember">
                        <label for="remember" class="form-label mb-4" style="font-size:15px;">Remember Me</label>
                      </div>
                        
                      <div class="form-group col ms-2">
                            <input type="submit" class="btn btn-sign mb-2 mt-4" value="Register">
                        </div>
                        
                      <p style="margin-top: 15%; font-size:15px;" class="text-center">Already have an account? <a style=" color:black; font-weight:bolder;" href="login.php">Sign in</a> </p>
                     
                    </form>
                </div>
                
                <div class="col-4 bg-light loginimg d-none d-md-block d-xl-block d-xxl-block"> </div>
            </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>