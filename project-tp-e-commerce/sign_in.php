


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" type="text/css" href="sign_in.css">
  <script src="https://kit.fontawesome.com/9dca957cfa.js" crossorigin="anonymous"></script>

  <!--Icons-->
  <script src="https://kit.fontawesome.com/7a1877b7ec.js" crossorigin="anonymous"></script>

  <title>Phone Shop</title>
</head>

<body>

  <!-- Header -->
  <header id="header" class="header">
    <div class="navigation">
      <div class="container">
        <nav class="nav">
          <div class="nav__hamburger">
            <i class="fas fa-bars"></i>
          </div>

          <div class="nav__logo">
            <a href="./index.php" class="scroll-link">
              PHONE
            </a>
          </div>

          <div class="nav__menu">
            <div class="menu__top">
              <span class="nav__category">PHONE</span>
              <a href="#" class="close__toggle">
                <i class="fas fa-times"></i>
              </a>
            </div>
            <ul class="nav__list">
              <li class="nav__item">
                <a href="#header" class="nav__link scroll-link">Home</a>
              </li>
              <li class="nav__item">
                <a href="#phone" class="nav__link scroll-link">Phones</a>
              </li>
              <li class="nav__item">
                <a href="#tv" class="nav__link scroll-link">TVs</a>
              </li>
              <li class="nav__item">
                <a href="#casque" class="nav__link scroll-link">Casques</a>
              </li>
            </ul>
          </div>

          <div class="nav__icons">
            <a href="sign_in.php" class="icon__item">
              <i class="fas fa-user"></i>
            </a>

            <a href="#" class="icon__item">
                <i class="fas fa-search"></i>
            </a>

            <a href="./index.php#cart" class="icon__item">
              <i class="fas fa-shopping-cart"></i>
              <span id="cart__total">0</span>
            </a>
          </div>
        </nav>
      </div>
    </div>
  <div class="vide">
  </div>
    <div class="shadow-lg p-3 mb-5  " id="div" >

          
         <form >

            <div class="form-group"  id="email">
            <label for="exampleInputEmail1" style="font-size: 25px;">Email adresse</label>
              <input type="email" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" style="font-size: 15px; border-radius: 15px">
            </div>
            <div class="form-group" id="password">
              <label for="exampleInputPassword1" style="font-size: 25px;">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="font-size: 15px; border-radius: 15px">
            </div><br>
            
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="index.html" style="text-decoration: none;">
                  <button class="btn btn-outline-danger " id="bton" type="button" style="font-size: 20px; border-radius: 25px; width: 250px;" >Se connecter</button>
                </a><br>
            </div>
            <center><p> si vous n'avez pas de compte  <a href="./sign_up.php" style="text-decoration: none; color: #eb0028;"><strong>Créer un compte</strong></a></p></center>
          
          </form>  
          
    </div>
<div class="vide"> 
          </div>
  <!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer__top">
        <div class="footer-top__box">
          <h3>CONTACT US</h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            42 Tilila, Agadir, Morocco
          </div>
          <div>
            <span>
              <i class="far fa-envelope"></i>
            </span>
            phone@gmail.com
          </div>
          <div>
            <span>
              <i class="fas fa-phone-alt"></i>
            </span>
            +212 000-000-000
          </div>
          <div>
            <span>
              <i class="fas fa-paper-plane"></i>
            </span>
            Agadir, Morocco
          </div>
        </div>
    </div>
    </div>
  </div>
  </footer>
  <!-- End Footer -->

  <script src="js/sign_in.js"></script>

  <!-- Glide Carousel Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
  <!-- Animate On Scroll -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Custom JavaScript -->
  <script src="./js/products.js"></script>
  <script src="./js/index.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/cart.js"></script>


</body>

</html>