
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social</title>
<link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="logo">
    <img src="{{URL::asset('imgs/logo.png')}}" alt="">
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


   @php
       $products = \App\Models\Product::all();
   @endphp
   @foreach ($products as $product)

   @endforeach
   <div class="box">
            <div class="image">
              <img src="{{ asset('imgs/'.$product->img) }}" alt="image" />
            </div>
            <div class="text">
              <h2>{{ $product->name }}</h2>
              <div class="button">
                  <div>
                    <h2> {{ $product->price }}EGP</h2>
                  </div>
              </div>
            </div>
          </div>






        </div>
      </div>

  <footer class="footer-sec">
    <div class="main">


      <div class="logo row">
        <div class="footer-header">
          <img src="https://i.postimg.cc/tgk8X2w7/manik-low-resolution-logo-white-on-transparent-background.png" class="manik" alt="">
        </div>
        <div class="logo-des">
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

          <a href="#" class="btn-know">Know More</a>
        </div>


      </div>



      <div class="office row">
        <div class="footer-header">
          <h3>Office</h3>
        </div>
        <div class="office-des">
          <p>here are <br> many variations of passages<br>of Lorem Ipsum<br>available</p>

         <a href="#">manikmaity.haker2003@gmail.com</a>

          <p class = "num">+91-9999999999</p>
        </div>
      </div>


      <div class="link row">
        <div class="footer-header">
          <h3>Links</h3>
        </div>

        <div class="link-des">
          <a href="#" class="footer-links">Home</a>
          <a href="#" class="footer-links">About</a>
          <a href="#" class="footer-links">Services</a>
          <a href="#" class="footer-links">Galary</a>
          <a href="#" class="footer-links">Contact</a>
        </div>

      </div>


      <div class="newsletter row">
        <div class="footer-header">
          <h3>Newsletter</h3>
        </div>
        <div class="newsletter-des">
          <div class="subcribe"><i class="sub-icon ri-mail-check-fill"></i>
            <input type="mail" placeholder = "Enter Email ID" required>
            <i class="sub-icon ri-arrow-right-line"></i>
          </div>
          <div class="icons">
            <a href="#"><i class="social-icon ri-facebook-fill"></i></a>
            <a href="#"><i class="social-icon ri-instagram-line"></i></a>
            <a href="#"><i class="social-icon ri-linkedin-fill"></i></a>
            <a href="#"><i class="social-icon ri-github-line"></i></a>

          </div>
        </div>
      </div>


    </div>
    <div class="copyright">
    <hr>

    <p>© Copyright 2022 Manik Maity.</p>
    </div>
  </footer>
      <script src="https://kit.fontawesome.com/2f67458a51.js" crossorigin="anonymous"></script>

</body>
</html>
