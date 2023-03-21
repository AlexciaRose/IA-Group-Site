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
          <span class="navbar-brand mb-0 h1" style="color:rgba(241, 70, 104, 1)">Toy<span style="color: black;">Barn</span></span>
        </div>
      </nav>

      <section class="vh-100 bg-set"> 
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center vh-100">
                <div class="col-8 vh-100 login">
    
<?php
  //defining variables
  $username = "";
  $password = "";
  $usernameErr ="";
  $passwordErr = "";

  function test_input($data) { //removes unnecessary characters
    $data = trim($data);
    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
  if ($usernameErr == "" && $passwordErr == ""){
    $_SESSION["username"] = $username;
    header("Location: index.php");
exit();
  }


}
  
    

?>

                <!--HTML Form-->
                    <form style="margin:auto;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                      <header style="color:rgba(88, 69, 177, 1); font-size: 40px; font-weight:bold;" class="mb-4 mt-5">Welcome back!</header>
                      <div class="form-group col ms-2">
                        <label for="username" class="form-label mb-0">Username</label> <br>
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

                      <div class="form-group col ms-3" >
                        <input type="checkbox" name="remember">
                        <label for="remember" class="form-label mb-4" style="font-size:15px;">Remember Me</label>
                      </div>
                        
                      <div class="form-group col ms-2">
                            <input type="submit" class="btn btn-sign mb-2" value="Sign In">
                        </div>
                        
                      <p style="margin-top: 50%; font-size:15px;" class="text-center">Don't have an account? <a style=" color:black; font-weight:bolder;" href="create.php">Register</a> </p>
                     
                    </form>
                </div>
                
                <div class="col-4 bg-light vh-100 loginimg">
                    
                    
                </div>
            </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>