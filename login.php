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
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-8 vh-100 text-center login">
                    <h1 style="color:rgba(88, 69, 177, 1)" >Welcome back!</h1>

                    <form action="index.php" methid="POST">
                      <label for="username">Username:</label>
                      <input type="text" name="username">
                      <label for="userpassword">Password:</label>
                      <input type="password" name="userpassword">
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