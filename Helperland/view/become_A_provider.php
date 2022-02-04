<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/become_A_provider.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Become pro</title>
  </head>
  <body>
  <?php
    session_start();
    if(isset($_SESSION['registration']) ){
        echo '<script>alert("'.$_SESSION['registration'].'")</script>';
        unset($_SESSION['registration'] );
    }
   


?>
    <!-- part 1 -->
    <section class="home">
      <nav>
      <div class="nav-block">
        <div class="header-minilogo">
          <a class="navbar-brand" href="#">
            <img src="../assets/img/footer-logo.png" />
          </a>

        </div>
        <div class="responsive_nav">
          <button id="bookcleaner" href="#">Book a Cleaner</button>
          <a class="header-navbar" href="#">Prices</a>
          <a class="header-navbar" href="#">Our Guarantee</a>
          <a class="header-navbar" href="#">Blog</a>
          <a class="header-navbar" href="#">Contact us</a>
          <button id="loginbttn" class="sp-btn">Login</button>
          <button id="becomehelper" class="sp-btn">Become a Helper</button>
         
            <button class="btn  dropdown-toggle transparant" type="button" data-toggle="dropdown"><img src="..\assets\img\ic-flag.png"/>
            <span class="caret"></span></button>
          
         
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="#"
                ><img
                  class="px-2 py-0"
                  src="../assets/img/ic-flag.png"
                  alt="flag"
                />INDIA</a
              >
            </li>
            <li>
              <a class="dropdown-item" href="#"
                ><img
                  class="px-2 py-0"
                  src="../assets/img/ic-flag.png"
                  alt="flag"
                />JAPAN</a
              >
            </li>
            <li>
              <a class="dropdown-item" href="#"
                ><img
                  class="px-2 py-0"
                  src="../assets/img/ic-flag.png"
                  alt="flag"
                />U.K.</a
              >
            </li>
          </ul>

        </div>
      
          
      </div>
      </nav>
      <!-- registration form starts -->
      <div class="r11">
        <div class="registration-form">
        <?php $base_url='../index1.php'?>
          <form method="POST" action=<?= $base_url."./?controller=Helperland&function=InsertServiceProvider" ?>>
          <div class="r1">
            <p class="registration-form-heading">Register Now!</p>
          </div>
          <div class="registration-form-content">
            <div class="r1">
              <input
                type="text"
                id="fname"
                placeholder="First Name"
                name="fname" require
              />
            </div>
            <div class="r1">
              <input
                type="text"
                id="lname"
                placeholder="Last Name"
                name="lname" require
              />
            </div>
            <div class="r1">
              <input type="text" id="email" name="email" placeholder="Email address" require />
            </div>
            <div class="r1">
              <input type="text" name="mobile" id="phone" placeholder="Phone Number" require pattern="^\d{10}$" />
            </div>
            <div class="r1">
              <input type="password" name="password" id="pswd" placeholder="Password" require />
            </div>
            <div class="r1">
              <input
                type="password"
                id="cnfpass"
                placeholder="Confirm Password" require
              />
            </div>
            <div class="r1">
              <input class="check-box-pro" type="checkbox" id="cnfpass"  require/>
              <span class="check-box-pro-txt"
                >Send me newsletters from Helperland</span
              >
            </div>
            <div class="r1">
              <input class="check-box-pro" type="checkbox" id="cnfpass" require />
              <span class="check-box-pro-txt">
                I accept terms and conditions & privacy policy</span
              >
            </div>
            <div class="r1">
              <button type="submit" name="baa_submit" class="get-started-btn">
                Get Started<span class="arrow">→</span>
              </button>
            </div>
          </div>
        
        </form>
        
        </div>
      
      </div>
      <div id="dwn-arrow">
        <center>
          <img src="../assets/img/group-18_5.png" alt="">
        </center>
      </div>
    </section>

    <section class="secondsection">
    <div class="pro-how-it-work">
      <div>
        <p id="HIW"><b>How it works</b></p>
      </div>
      <div class="w-full HIW-work-card">
        <div class="HIW-work-card-left">
          
          <p class="HIW-work-card-heading-left">Register yourself</p>
          <p class="HIW-work-card-txt-left">
            Provide your basic information to register yourself as a service
            provider.
          </p>
          <p class="HIW-work-card-txt-left mt-5">
            Read More <span class="arrow">→</span>
          </p>
          
          
          <img
            src="../assets/img/group-83.png"
            class="HIW-work-card-img-right"
            alt=""
          />
          </div>
        </div>
        <div class="HIW-work-card-right">
          <div class="pro-card-part-left">
            <img
              src="../assets/img/group-39.png"
              class="HIW-work-card-img-left"
              alt=""
            />
          </div>
          <div class="pro-card-part-right">
            <p class="HIW-work-card-heading-left">Get service requests</p>
            <p class="HIW-work-card-txt-left">
              You will get service requests from customes depend on service
              area and profile.
            </p>
            <p class="HIW-work-card-txt-left mt-5">
              Read More <span class="arrow">→</span>
            </p>
          </div>
        </div>
        <div class="HIW-work-card-left">
          <p class="HIW-work-card-heading-left">Complete service</p>
          <p class="HIW-work-card-txt-left">
            Accept service requests from your customers and complete your
            work.
          </p>
          <p class="HIW-work-card-txt-left mt-5">
            Read More <span class="arrow">→</span>
          </p>
          <img
            src="../assets/img/group-40.png"
            class="HIW-work-card-img-right"
            alt=""
          />
        </div>
      </div>
    </div>
    </section>

    <div id="hr">
      <!-- footer -->
<section class="testimonial mt-5">
  <div class="container-lg">
      <div class="bottom-area">
              <div class="newsletter text-center">
              <h2>GET OUR NEWSLETTER</h2>
              <form action="#">
                  <input type="text" class="form-email" placeholder="YOUR EMAIL">
                  <button type="submit" class="btn-submit">Submit</button>
              </form>
          </div>
      </div>
  </div>
</section>
<section class="footer">		
  <div class="container">
      <div class="row justify-content-center py-4">
          <div class="col-lg-2">
            <img src="./assets/img/footer-logo.png"/>
            
          </div>
          <div class="col-lg-8">
              <div class="footer-navbar text-center p-4">
                  <a class="" href="#">HOME</a>
                  <a class="" href="#">ABOUT</a>
                  <a class="" href="#">TESTIMONIALS</a>
                  <a class="" href="#">FAQS</a>
                  <a class="" href="#">INSURANCE</a>
                  <a class="" href="#">POLICY</a>
                  <a class="" href="#">IMPRESSUM</a>
              </div>
          </div>
          <div class="col-lg-2 py-4">
              <a href="#"><img src="../assets/img/ic-facebook.png" alt="fb" class="px-2"></a>
              <a href="#"><img src="../assets/img/ic-instagram.png" alt="insta" class="px-2"></a>
          </div>
      </div>
  </div>
  <div class="horizontal_line">
      
  </div>
  <div class="row justify-content-center text-center align-content-center privacy py-2">
    
      <div class="col-lg-10">
          <p>©2018 Helperland. All rights reserved. Terms and Conditions | Privacy Policy</p>
      </div>
  </div>
</section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
