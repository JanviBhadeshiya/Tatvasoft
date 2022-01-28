<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contactUs, PSD To HTML</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../assets/css/ContactUs.css" />
  </head>
  <body>
    <nav class="d-flex justify-content-between align-items-center text-white">
      <div class="nav-block">
        <div class="header-minilogo">
          <a class="d-block" href="index.html">
            <img src="../assets/img/logo-small.png" alt="logo" />
          </a>
         
        </div>
        <div class="responsive_nav">
          <button id="booknow" href="#">Book now</button>
          <button id="priceandservice" href="prices.php">Prices & service</button>
          <a class="header-navbar" href="#">Warranty</a>
          <a class="header-navbar" href="#">Blog</a>
          <a class="header-navbar" href="#">Contact</a>
          <button id="loginbttn" class="sp-btn">Login</button>
          <button id="becomehelper" class="sp-btn">Become a Helper</button>
        </div>
      </div>
    </nav>
    <!-- img-->
    <section class="faq-banner">
      <img
        src="../assets/img/group-16_2.png"
        alt="faqHeaderImage"
        style="max-width: 100%; height: auto"
      />
    </section>
    <section class="few-word-about container">
        <div class="flex-column d-flex align-items-center justify-content-center">
          <div class="cleaningHeader1">Contact Us</div>
          <div
            class="
              faHeaderDecoration
              w-100
              d-flex
              align-items-center
              justify-content-center
            "
          >
            <span></span>
            <img src="../assets/img/forma-1-copy-5.png"/>
            <span></span>
          </div>
        </div>

        <!--3 icons and texts-->
        <div class="contact-section">
              <div class="card-contact mt-5">
                <img class="location" src="../assets/img/forma-1_2.png" alt="" />
                <p class="mt-5">1111 Lorem ipsum text 100, Lorem ipsum AB</p>
              </div>
              <div class="card-contact mt-5">
                <img class="phone" src="../assets/img/phone-call.png" alt="" />
                <p class="mt-5">+49 (40) 123 56 7890</p>
                <p>+49 (40) 987 56 0000</p>
              </div>
              <div class="card-contact mt-5">
                <img class="emial mb-1 mt-2" src="../assets/img/vector-smart-object.png" alt="" />
                <p class="mt-5">1111 Lorem ipsum text 100, Lorem ipsum AB</p>
              </div>
            </div>
        </div>
    </section>
    <div class="contact-form">
        <div class="contact-hr mt-5"></div>
        <div class="row">
          <p class="contact-form-heading">Get in touch with us</p>
        </div>
        <form action="" method="POST">
        <div class="contact-form-content mt-5">
          <div class="r1">
            <input
              type="text"
              id="fname"
              placeholder="First Name"
              name="fname"
            />

            <input
              type="text"
              id="lname"
              placeholder="Last Name"
              name="lname"
            />
          </div>
          <div class="r1">
            <input
              type="tel"
              id="phone"
              placeholder="Mobile Number"
              name="phone"
              pattern="^\d{10}$"
              required="required"
            />
            <input
              type="email"
              id="email"
              placeholder="Email address"
              name="email"
            />
          </div>
          <div class="r2">
            <select name="Subjects" id="Subjects">
              <option value="volvo">Subject</option>
            </select>
          </div>
          <div class="r1">
            <input
              type="text"
              class="contact-form-message"
              id="phone"
              placeholder="Message"
              name="message"
            />
          </div>
          <?php
          include_once "./Models/model.php";
          ?>
          <div class="row">
            <button class="contact-form-submit mt-5">Submit</button>
          </div>
        </div>
    </div>
</form>
    <div class="contact-map">
      <img src="../assets/img/group-16.png" alt=""  style="max-width: 100%; height: auto">
    </div>

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

<?php include('footer.php') ?>
 

<script src=".\js\bootstrap.bundle.min.js"></script>    
  </body>
</html>