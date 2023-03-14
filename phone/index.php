<?php

include("conect.php");

$sql = "select * from products";
$q = $db ->prepare( $sql );
$q->execute( [] ) ;
$products = $q->fetchAll();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="logo">
    <img src="imgs/unnamed.png" alt="">
    </div></div>
    <div class="container">
    <ul class="link">
        <li><a href="">Link</a></li>
        <li><a href="">Link</a></li>
        <li><a href="">Link</a></li>
        <li><a href="">Link</a></li>
        <li><a href="">Link</a></li>
        <li><a href="">Link</a></li>
    </ul>
  </div>
    <div id="Projects" class="Projects">
        <div class="container">


      <?php  
     foreach ($products as $product) {
    echo '<div class="box">
            <div class="image">
              <img src="./imgs/'.$product["img"].'" alt="image" />
            </div>
            <div class="text">
              <h2>'.$product["name"].'</h2>
              <div class="button">
                  <div>
                    <h2>'.$product["price"].' EGP</h2>
                  </div>
              </div>
            </div>
          </div>';
     }
     ?>
          
 
 
   
          
        </div>
      </div>
      <div class="footer">
        <div class="container">
          <div class="box">
            <h3>Ahmed Ghdeer</h3>
            <ul class="social">
              <li>
                <a href="https://www.facebook.com/anaahmed.ahmed.359" class="facebook">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="#" class="twitter">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#" class="youtube">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
            </ul>
            <p class="text">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus nulla rem, dignissimos iste aspernatur
            </p>
          </div>
          <div class="box">
            <ul class="links">
              <li><a href="#">Important Link 1</a></li>
              <li><a href="#">Important Link 2</a></li>
              <li><a href="#">Important Link 3</a></li>
              <li><a href="#">Important Link 4</a></li>
              <li><a href="#">Important Link 5</a></li>
            </ul>
          </div>
          <div class="box">
            <div class="line">
              <i class="fas fa-map-marker-alt fa-fw"></i>
              <div class="info">Egypt, Asyut</div>
            </div>
            <div class="line">
              <i class="far fa-clock fa-fw"></i>
              <div class="info">Business Hours: From 10:00 To 18:00</div>
            </div>
            <div class="line">
              <i class="fas fa-phone-volume fa-fw"></i>
              <div class="info">
                <span>+201114632052</span>
              </div>
            </div>
          </div>
          <div class="box footer-gallery">
            <img src="imgs/6666.jfif" alt="" />
            <img src="imgs/999.jfif" alt="" />
            <img src="imgs/images 7777.jfif" alt="" />
            <img src="imgs/456.jfif" alt="" />
            <img src="imgs/images 7777.jfif" alt="" />
            <img src="imgs/images147.jfif" alt="" />

          </div>
        </div>
        <p class="copyright">Made &lt;3 By Aboghdeer</p>
      </div>
      <script src="https://kit.fontawesome.com/2f67458a51.js" crossorigin="anonymous"></script>

</body>
</html>