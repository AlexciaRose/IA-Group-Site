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
                        <a class="nav-link" href="#">About Us</a>
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


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      <div class="container">
        <div class="promo mt-2 text-center align-items-center">
        <p>Our Prices Are</p>
        <h1>OUT <br> <span>OF THIS</span> <br> WORLD</h1>
        <br>
        <p>40% Off ALL LEGO Sets during MARCH</p>
        <a class="btn btn-primary1 mt-3 mb-5" href="#lego" role="button">Buy Now</a>
        </div>
        
      
        <div class="container prods mt-5">
        <p style="font-size: 40px; font-family:'Roboto-Flex'; font-weight:400;"><strong>Action Figures</strong></p>
      
      
      
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/GIJOE.png" class="card-img-top" alt="..." height="290" width="229">
            <div class="card-body">
              <h5 class="card-title">Snake Eyes - G.I.Joe</h5>
              <p class="card-text"><strong>$1,099.00</strong></p>
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/Rengoku.png" class="card-img-top" alt="..." height="290" width="250">
            <div class="card-body">
              <h5 class="card-title">Kyōjurō Rengoku</h5>
              <p class="card-text"><strong>$1,099.00</strong></p>
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">
            </div>
            
          </div>
        </div>
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/Levi.png" class="card-img-top" alt="..." height="290" width="250">
            <div class="card-body">
              <h5 class="card-title">Levi Ackerman</h5>
              <p class="card-text"><strong>$1,099.00</strong></p>
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">
             </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/Luffy.png" class="card-img-top" alt="..." height="290" width="250">
            <div class="card-body">
              <h5 class="card-title">Monkey D. Luffy</h5>
              <p class="card-text"><strong>$1,099.00</strong></p>  
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">         
             </div>
          </div>
        </div>
      </div>

      <div class="marvel mt-5 pt-4 mb-5">
      <div class="text-center mb-0">
      <img class="" src = "WebImg/MAA.png">
      </div>
          
        
      
          <div class="marvel2">
            <div class="card p-0" style="width: 18rem; background-color: transparent; ">
              <img src="WebImg/CapAmerica.png" class="card-img-top" alt="..." >
              <div class="card-body">
                <p class="card-text" style="color: rgb(255, 255, 255); font-size:20px; font-family:'Roboto-Flex';">Captain America, Civil War - Collector's Item</p>
                <p class="card-text"  style="color: red;"><strong>$3,000.00</strong></p>
                <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">
              </div>
            </div>

            <div class="card" style="width: 18rem; background-color: transparent; ">
              <img src="WebImg/Ironman.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text" style="color: rgb(255, 255, 255); font-size:20px; font-family:'Roboto-Flex';">Iron Man - Infinity War - Collector's Item</p>
                <p class="card-text" style="color: red;"><strong>$3,000.00</strong></p>
                <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">
              </div>
            </div>

          </div>

          <div>
            
          </div>
      </div>
      

<!-- Second set of toy selection -->
      

<a id="lego"><p style="font-size: 40px;"><strong>Lego Sets</strong></p></a>
               
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/LegoS1.png" class="card-img-top" alt="..." height="290" width="229">
            <div class="card-body">
             <h5 class="card-title">LEGO 76193 | Marvel The Guardians' Ship</h5>
              <p class="card-text"><strong>$8,000</strong></p>
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/LegoS2.png" class="card-img-top" alt="..." height="290" width="250">
            <div class="card-body">
              <h5 class="card-title">LEGO 60349 | Lunar Space Station</h5>
              <p class="card-text"><strong>$12,000</strong></p>  
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">          
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/LegoS3.png" class="card-img-top" alt="..." height="290" width="250">
            <div class="card-body">
              <h5 class="card-title">LEGO 10497 | Galaxy Explorer: First Edition</h5>
              <p class="card-text"><strong>$6,000</strong></p>      
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">     
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/LegoS4.png" class="card-img-top" alt="..." height="290" width="250">
            <div class="card-body">
              <h5 class="card-title">LEGO 75192 | Star Wars Millennium Falcon</h5>
              <p class="card-text"><strong>$78,000</strong></p>  
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">          
            </div>
          </div>
        </div>
      </div>

      
      <!-- Third set of toy selection-->
      <br> <br> <br>
      <p style="font-size: 40px;"><strong>Soft Toys</strong></p>
      
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/SoftT1.png" class="card-img-top" alt="..." height="290" width="229">
            <div class="card-body">
              <h5 class="card-title">Cute Croissant Plushie</h5>
              <p class="card-text"><strong>$1,500.00</strong></p>
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/SoftT2.png" class="card-img-top" alt="..." height="290" width="250">
            <div class="card-body">
              <h5 class="card-title">10" Squishmallow Pikachi</h5>
              <p class="card-text"><strong>$2,500.00</strong></p>  
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">s          
            </div>
            
          </div>
        </div>
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/SoftT3.png" class="card-img-top" alt="..." height="290" width="250">
            <div class="card-body">
              <h5 class="card-title">Inkey Plushie</h5>
              <p class="card-text"><strong>$2,500.00</strong></p>  
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">          
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/SoftT4.png" class="card-img-top" alt="..." height="290" width="250">
            <div class="card-body">
              <h5 class="card-title">12" Squishmallow Kuromi</h5>
              <p class="card-text"><strong>$1,200.00</strong></p>   
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">         
            </div>
          </div>
        </div>
      </div>


      <!-- Fourth set of toy selection-->
      <br> <br> <br>
      <p style="font-size: 40px;"><strong>Dolls & Accessories</strong></p>
            
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card" style="background: #ebe8ebbe">
            <img src="WebImg/DollsA1.png" class="card-img-top" alt="..." height="290" width="229">
            <div class="card-body">
              <h5 class="card-title">Little Mermaid Doll - Disney Special</h5>
              <p class="card-text"><strong>$5,500.00</strong></p> 
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">           
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/DollsA2.png" class="card-img-top" alt="..." height="290" width="250">
            <div class="card-body">
              <h5 class="card-title">Sing & Play Mirabel Dol - Limited Editionl</h5>
              <p class="card-text"><strong>$3,500.00</strong></p>   
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">         
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/Dolls3.png" class="card-img-top" alt="..." height="290" width="250">
            <div class="card-body">
              <h5 class="card-title">Bratz Dolls 20th anniversary Set</h5>
              <p class="card-text"><strong>$9,300.00</strong></p>     
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">       
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/Dolls4.png" class="card-img-top" alt="..." height="290" width="250">
            <div class="card-body">
              <h5 class="card-title">Barbie Dreamhouse Dollhouse</h5>
              <p class="card-text"><strong>$12,000.00</strong></p>   
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">         
            </div>
          </div>
        </div>
      </div>

      <!-- Fifth set of toy selection-->
      <br> <br> <br>
      <p style="font-size: 40px;"><strong>Games & Crafts</strong></p>
            
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/GamesC1.png" class="card-img-top" alt="..." height="290" width="229">
            <div class="card-body">
              <h5 class="card-title">Electronic Fishing Toy Set</h5>
              <p class="card-text"><strong>$1,500.00</strong></p>
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">            
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/GamesC2.png" class="card-img-top" alt="..." height="290" width="250">
            <div class="card-body">
              <h5 class="card-title">DOTS Build-a-Panda Kit</h5>
              <p class="card-text"><strong>$3,000.00</strong></p><input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">            
            </div>
            
          </div>
        </div>
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/GamesC3.png" class="card-img-top" alt="..." height="290" width="250">
            <div class="card-body">
              <h5 class="card-title">Whack-a-Frog Game</h5>
              <p class="card-text"><strong>$1,300.00</strong></p>   
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">         
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="background: #ebe8e8be">
            <img src="WebImg/GamesC4.png" class="card-img-top" alt="..." height="290" width="250">
            <div class="card-body">
              <h5 class="card-title">Fashion Design Sketch Set</h5>
              <p class="card-text"><strong>$2,000.00</strong></p>   
              <input type="button" class="btn btn-primary" text-align: center onclick="displayMessage()" value="Order">         
            </div>
          </div>
        </div>
        </div>
      
        
      </div>

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