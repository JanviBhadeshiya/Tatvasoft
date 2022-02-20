
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Psd to HTML</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['registration']) ){
        echo '<script>alert("'.$_SESSION['registration'].'")</script>';
        unset($_SESSION['registration'] );
    }
    if(isset($_SESSION['forget1']) ){
        echo '<script>alert("'.$_SESSION['forget1'].'")</script>';
        unset($_SESSION['forget1'] );
    }
    if(isset($_SESSION['for_login']) ){
        echo '<script>alert("'.$_SESSION['for_login'].'")</script>';
        unset($_SESSION['forget1']);
    }
    if(isset($_SESSION['msg']) ){
        echo '<script>alert("'.$_SESSION['msg'].'")</script>';
        unset($_SESSION['msg']);
    }

   


?>

<?php $base_url='../index1.php'?>
    <!-- part 1 -->
    <section class="home">
      <nav class="navbar navbar-expand-lg" id="navinav">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="../assets/img/footer-logo.png" id="header_logo">
          </a>
          <div class=" text-center">
            <a class="cleaner header-navbar" href="book_service.php">Book a Cleaner</a>
            <a class="header-navbar" href="prices.php">Prices</a>
            <a class="header-navbar" href="#">Our Guarantee</a>
            <a class="header-navbar" href="#">Blog</a>
            <a class="header-navbar" href="ContactUs.php">Contact us</a>
            <button id="loginbttn" class="sp-btn"data-toggle="modal" onclick="login()" data-target="#myModal">Login</button>
            
                                
            <a href="become_A_provider.php" id="becomehelper" ">Become a Helper</a>

            <a data-bs-toggle="dropdown" class="header-navbar" href="#"><img class="px-2 py-0"
                    src="../assets/img/ic-flag.png" alt="flag"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="7">
                    <image width="12" height="7"
                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAHCAQAAACWu2SvAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQflCxgKKTQARYB4AAAAa0lEQVQI103NoQoCYQDD8VkMggYRLYLFt7rmI10ziMVkEs6m2ZcwWQQRsdh/huM73dL+jC0qjYn8eaSxijNu5h2euuISA0c8LUUs3HEybFt7fMyMvXEQKQMbvDywa8nvsgbrknvSaZt+qhK+nGpkpn2sFJAAAAAASUVORK5CYII=" />
                </svg>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"><img class="px-2 py-0" src="../assets/img/ic-flag.png"
                          alt="flag">INDIA</a></li>
              <li><a class="dropdown-item" href="#"><img class="px-2 py-0" src="../assets/img/ic-flag.png"
                          alt="flag">JAPAN</a></li>
              <li><a class="dropdown-item" href="#"><img class="px-2 py-0" src="../assets/img/ic-flag.png"
                          alt="flag">U.K.</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="middle-text">
        <div class="col-md-12 ">
            <h1>Lorem, ipsum dolor.</h1>
            <p class="mb-0">
              &#x2713 Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <p class="mb-0">
              &#x2713 Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <p class="mb-0">
              &#x2713 Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
    </div>
    
    <div class="lets-book-a-cleaner text-center mt-2">
      <button href="#" class="lets-book-a-cleaner-text">Let's Book a Cleaner</button> 
    </div>

    <div class="quad text-center p-4 m-5 d-flex">
      <div class="fourimg flex-column px-4">
          <img src="../assets/img/step-1.png">
          <span class="mt-4 fourtxt">Enter your postcode</span>
        </div>
        <div class="arrow flex-column py-4">
        <img src="../assets/img/step-arrow-1.png">
      </div>
      <div class="fourimg flex-column px-4">
        <img src="../assets/img/step-2.png">
        <span class="mt-4 fourtxt">Enter your postcode</span>
      </div>
      <div class="arrow flex-column py-4">
        <img src="../assets/img/step-arrow-1-copy.png">
      </div>
      <div class="fourimg flex-column px-4">
        <img src="../assets/img/step-3.png">
        <span class="mt-4 fourtxt">Enter your postcode</span>
      </div>
      <div class="arrow flex-column py-4">
        <img src="../assets/img/step-arrow-1.png">
    </div>
    <div class="fourimg flex-column px-4">
      <img src="../assets/img/step-4.png">
      <span class="mt-4 fourtxt">Enter your postcode</span>
    </div>
  </div>
  <div class="down-arrow">
  <center>
    <img src="../assets/img/group-18_5.png">
  </center>
  </div>
    </section>
    <!-- part 2 -->
    <!-- About Section Start -->
    <section class="about py-4 mt-5">
      <div class="container-lg">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="section-title text-center ">
                      <h2 class="mb-5">Why Helperland</h2>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center about-second">
              <div class="col-md-6 col-lg-4 ">
                  <div class="grp-img text-center">
                      <img src="../assets/img/group-24.png" alt="">
                  </div>
                  <div class="grp-text text-center mt-5">
                      <div class="title">
                          <h2 class="heading mb-2">Experience & Vetted Professionals</h2>
                      </div>
                      <div class="m-3">
                        <center>
                          <p>dominate the industry in scale and scope with an adaptable, extensive network that
                              consistently delivers exceptional results.</p>
                        </center>
                      </div>
                  </div>
              </div>
              <div class="popup" id="popup">
              <form method="POST" action=<?=$base_url."./?controller=helperland&function=login"?>>
              
                <div class="popup-content" id="popup-content">
                <span class="close"> &times;</span>
                <input type="text" name="loginemail" placeholder="Email" require>
                <input type="password"  name="password"placeholder="Password" require>
                <button id="loginbttn2"  type="submit" name="login_submit" class="sp-btn"data-toggle="modal">Login</button>
                 <div><a href="#" style="color: #0d6efd;"onclick="forget_password();">Forget Password</a></div>
                <div>Don't Have Account? <a href="../View/sign_up.php" style="color: #0d6efd;">Create Account</a></div> 
                </div>
                </form>
              </div>
              <div class="popup" id="forgetpassword">
              <form method="POST" action=<?= $base_url."./?controller=helperland&function=ForgotMail"?>>
                
                <div class="popup-content" id="popup-content">
                <span class="close1"> &times;</span>
                <h1>Forget_Password</h1>
                <input type="text" name="forget" placeholder="Email">
                <button id="loginbttn2" type="submit" name="forget_submit" class="sp-btn"data-toggle="modal">Submit</button>                              
                </div>
                </form>
              </div>  
              
              <div class="col-md-6 col-lg-4">
                  <div class="grp-img text-center">
                      <img src="../assets/img/group-23.png" alt="">
                  </div>
                  <div class="grp-text text-center mt-5 ">
                      <div class="title">
                          <h2 class="heading mb-2">Secure Online Payment</h2>
                      </div>
                      <div class="m-3">
                        <center>
                          <p>Payment is processed securely online. Customers pay safely online and
                              manage the booking.</p>
                        </center>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4">
                  <div class="grp-img text-center">
                      <img src="../assets/img/group-24.png" alt="">
                  </div>
                  <div class="grp-text text-center mt-5 ">
                      <div class="title">
                          <h2 class="heading mb-2">Dedicated Customer
                              Service</h2>
                      </div>
                      <div class="m-3">
                          <center>
                            <p>to our customers and are guided in all we do by their needs. The team is always happy to
                              support you and offer all the information.</p>
                          </center>
                      </div>
                  </div>
              </div>
          </div>

      </div>  
  </section>
  <!-- About Section End -->
    <!-- part 3 -->

      <!-- Blog Section Start -->
    <section class="blog ">
      <div class="container-lg">
          <div class="row  py-5 mt-5">
              <div class="col-lg-7">
                  <h2 class="heading">Lorem ipsum dolor sit amet, consectetur</h2>
                  <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi sapien, suscipit
                      ut accumsan
                      vitae, pulvinar ac libero.</p>
                  <p>Aliquam erat volutpat. Nullam quis ex odio. Nam bibendum cursus purus, vel efficitur urna
                      finibus vitae. Nullam finibus aliquet pharetra. Morbi in sem dolor. Integer pretium hendrerit
                      ante quis vehicula.</p>
                  <p>Mauris consequat ornare enim, sed lobortis quam ultrices sed.</p>
              </div>
              <div class="col-lg-5">
                  <div class="img text-center">
                      <img src="../assets/img/group-36.png" alt="jjjm">
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="section-title text-center ">
                      <h2 class="mb-5">Our Blog</h2>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6 col-lg-4 ">
                  <div class="card shadow blog-card">
                      <img src="../assets/img/group-28.png" class="card-img-top" alt="blog-img">
                      <div class="card-body">
                          <h3 class="blog-title">Lorem ipsum dolor sit amet</h3>
                          <p class="blog-dt">January 28, 2019</p>
                          <p class="blog-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum
                              metus pulvinar aliquet.</p>
                          <p class="read-post mb-0 mt-4">Read the Post <a href="#"><svg class="read-arrow"
                                      xmlns="http://www.w3.org/2000/svg" width="29" height="10">
                                      <path fill-rule="evenodd" fill="#4F4F4F"
                                          d="M.1 3.725h21.392C20.456 2.263 19.94 1.31 19.887.1c2.357 2.151 5.421 3.318 9.213 4.414-3.792 1.051-6.721 2.334-9.213 4.696.573-1.602.589-2.454 1.637-4.009H.1V3.725z" />
                                  </svg></a></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 ">
                  <div class="card shadow blog-card">
                      <img src="../assets/img/group-29.png" class="card-img-top" alt="blog-img">
                      <div class="card-body">
                          <h3 class="blog-title">Lorem ipsum dolor sit amet</h3>
                          <p class="blog-dt">January 28, 2019</p>
                          <p class="blog-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum
                              metus pulvinar aliquet.</p>
                          <p class="read-post mb-0 mt-4">Read the Post <a href="#"><svg class="read-arrow"
                                      xmlns="http://www.w3.org/2000/svg" width="29" height="10">
                                      <path fill-rule="evenodd" fill="#4F4F4F"
                                          d="M.1 3.725h21.392C20.456 2.263 19.94 1.31 19.887.1c2.357 2.151 5.421 3.318 9.213 4.414-3.792 1.051-6.721 2.334-9.213 4.696.573-1.602.589-2.454 1.637-4.009H.1V3.725z" />
                                  </svg></a></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 ">
                  <div class="card shadow blog-card">
                      <img src="../assets/img/group-30.png" class="card-img-top" alt="blog-img">
                      <div class="card-body">
                          <h3 class="blog-title">Lorem ipsum dolor sit amet</h3>
                          <p class="blog-dt">January 28, 2019</p>
                          <p class="blog-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum
                              metus pulvinar aliquet.</p>
                          <p class="read-post mb-0 mt-4">Read the Post <a href="#"><svg class="read-arrow"
                                      xmlns="http://www.w3.org/2000/svg" width="29" height="10">
                                      <path fill-rule="evenodd" fill="#4F4F4F"
                                          d="M.1 3.725h21.392C20.456 2.263 19.94 1.31 19.887.1c2.357 2.151 5.421 3.318 9.213 4.414-3.792 1.051-6.721 2.334-9.213 4.696.573-1.602.589-2.454 1.637-4.009H.1V3.725z" />
                                  </svg></a></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Blog Section End -->
    <!-- part 4 -->
    <section class="testimonial mt-5">
      <div class="container-lg">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="section-title text-center ">
                      <h2 class="m-5">What Our Customers Say</h2>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center ">
              <div class="col-md-6 col-lg-4 ">
                  <div class="card shadow prof-card">
                      <div class="card-body">
                          <div align="right">
                              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36">
                                  <path fill-rule="evenodd" fill="#DAE5EC"
                                      d="M10.545 10.962h13.217c.485 0 .878.379.878.847 0 .468-.393.847-.878.847H10.545c.055 0-.878-.379-.878-.847 0-.468.933-.847.878-.847zm13.217 9.713c.485 0 .878.865.878.847 0 .468-.393.847-.878.847h-7.556c-.484 0-.877-.379-.877-.847 0 .018.393-.847.877-.847h7.556zM9.667 16.666c0-.469.933-.847.878-.847h13.217c.485 0 .878.378.878.847 0 .468-.393.847-.878.847H10.545c.055 0-.878-.379-.878-.847zm19.506 10.531c-3.601 3.475-8.714 5.152-13.763 4.536l-5.7 4.061c-.19.136-.419.406-.12.406-.629 0-.726-.211-.822-.237-.325-.085-.59-.31-.298-.61l-2.048-3.732c-.235.199.027-1.16 1.378-1.387-.233.566.41.027.645.566l1.084 2.491 4.938-3.519a1.12 1.12 0 0 1 .82-.194c4.509.675 9.117-.774 12.334-3.879 5.582-5.385 5.582-14.149 0-19.535C22.4.778 12.959.778 7.377 6.164 3.83 9.587 2.411 14.446 3.58 19.162l.008.035c.165.652.379 1.296.631 2.773l2.563 5.013c.388.539-.028 1.16-.586 1.386-.559.227-1.202-.026-1.437-.565L2.19 21.903c-.3-.717-.548-1.464-.726-2.178a.982.982 0 0 1-.038-.151C.114 14.162 1.755 8.595 5.825 4.666c6.437-6.211 16.911-6.21 23.348 0 6.437 6.212 6.437 16.319 0 22.531z" />
                              </svg>
                          </div>
                          <div class="profile d-flex">
                              <div class="prof-img">
                                  <img src="../assets/img/group-31.png" alt="">
                              </div>
                              <div class="prof-details">
                                  <p class="prof-name">Lary Watson</p>
                                  <p class="prof-city">Manchester</p>
                              </div>
                          </div>
                          <p class="prof-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum
                              metus pulvinar aliquet consequat. Praesent nec malesuada nibh.</p>
                          <p class="prof-txt">
                              Nullam et metus congue,
                              auctor augue sit amet, consectetur tortor.
                          </p>
                          <p class="read-more mb-0 mt-4">Read More <a href="#"><svg class="read-arrow"
                                      xmlns="http://www.w3.org/2000/svg" width="29" height="10">
                                      <path fill-rule="evenodd" fill="#4F4F4F"
                                          d="M.1 3.725h21.392C20.456 2.263 19.94 1.31 19.887.1c2.357 2.151 5.421 3.318 9.213 4.414-3.792 1.051-6.721 2.334-9.213 4.696.573-1.602.589-2.454 1.637-4.009H.1V3.725z" />
                                  </svg></a></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 ">
                  <div class="card shadow prof-card">
                      <div class="card-body">
                          <div align="right">
                              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36">
                                  <path fill-rule="evenodd" fill="#DAE5EC"
                                      d="M10.545 10.962h13.217c.485 0 .878.379.878.847 0 .468-.393.847-.878.847H10.545c.055 0-.878-.379-.878-.847 0-.468.933-.847.878-.847zm13.217 9.713c.485 0 .878.865.878.847 0 .468-.393.847-.878.847h-7.556c-.484 0-.877-.379-.877-.847 0 .018.393-.847.877-.847h7.556zM9.667 16.666c0-.469.933-.847.878-.847h13.217c.485 0 .878.378.878.847 0 .468-.393.847-.878.847H10.545c.055 0-.878-.379-.878-.847zm19.506 10.531c-3.601 3.475-8.714 5.152-13.763 4.536l-5.7 4.061c-.19.136-.419.406-.12.406-.629 0-.726-.211-.822-.237-.325-.085-.59-.31-.298-.61l-2.048-3.732c-.235.199.027-1.16 1.378-1.387-.233.566.41.027.645.566l1.084 2.491 4.938-3.519a1.12 1.12 0 0 1 .82-.194c4.509.675 9.117-.774 12.334-3.879 5.582-5.385 5.582-14.149 0-19.535C22.4.778 12.959.778 7.377 6.164 3.83 9.587 2.411 14.446 3.58 19.162l.008.035c.165.652.379 1.296.631 2.773l2.563 5.013c.388.539-.028 1.16-.586 1.386-.559.227-1.202-.026-1.437-.565L2.19 21.903c-.3-.717-.548-1.464-.726-2.178a.982.982 0 0 1-.038-.151C.114 14.162 1.755 8.595 5.825 4.666c6.437-6.211 16.911-6.21 23.348 0 6.437 6.212 6.437 16.319 0 22.531z" />
                              </svg>
                          </div>
                          <div class="profile d-flex">
                              <div class="prof-img">
                                  <img src="../assets/img/group-32.png" alt="">
                              </div>
                              <div class="prof-details">
                                  <p class="prof-name">John Smith</p>
                                  <p class="prof-city">Manchester</p>
                              </div>
                          </div>
                          <p class="prof-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum
                              metus pulvinar aliquet consequat. Praesent nec malesuada nibh.</p>
                          <p class="prof-txt">
                              Nullam et metus congue,
                              auctor augue sit amet, consectetur tortor.
                          </p>
                          <p class="read-more mb-0 mt-4">Read More <a href="#"><svg class="read-arrow"
                                      xmlns="http://www.w3.org/2000/svg" width="29" height="10">
                                      <path fill-rule="evenodd" fill="#4F4F4F"
                                          d="M.1 3.725h21.392C20.456 2.263 19.94 1.31 19.887.1c2.357 2.151 5.421 3.318 9.213 4.414-3.792 1.051-6.721 2.334-9.213 4.696.573-1.602.589-2.454 1.637-4.009H.1V3.725z" />
                                  </svg></a></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 ">
                  <div class="card shadow prof-card">
                      <div class="card-body">
                          <div align="right">
                              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36">
                                  <path fill-rule="evenodd" fill="#DAE5EC"
                                      d="M10.545 10.962h13.217c.485 0 .878.379.878.847 0 .468-.393.847-.878.847H10.545c.055 0-.878-.379-.878-.847 0-.468.933-.847.878-.847zm13.217 9.713c.485 0 .878.865.878.847 0 .468-.393.847-.878.847h-7.556c-.484 0-.877-.379-.877-.847 0 .018.393-.847.877-.847h7.556zM9.667 16.666c0-.469.933-.847.878-.847h13.217c.485 0 .878.378.878.847 0 .468-.393.847-.878.847H10.545c.055 0-.878-.379-.878-.847zm19.506 10.531c-3.601 3.475-8.714 5.152-13.763 4.536l-5.7 4.061c-.19.136-.419.406-.12.406-.629 0-.726-.211-.822-.237-.325-.085-.59-.31-.298-.61l-2.048-3.732c-.235.199.027-1.16 1.378-1.387-.233.566.41.027.645.566l1.084 2.491 4.938-3.519a1.12 1.12 0 0 1 .82-.194c4.509.675 9.117-.774 12.334-3.879 5.582-5.385 5.582-14.149 0-19.535C22.4.778 12.959.778 7.377 6.164 3.83 9.587 2.411 14.446 3.58 19.162l.008.035c.165.652.379 1.296.631 2.773l2.563 5.013c.388.539-.028 1.16-.586 1.386-.559.227-1.202-.026-1.437-.565L2.19 21.903c-.3-.717-.548-1.464-.726-2.178a.982.982 0 0 1-.038-.151C.114 14.162 1.755 8.595 5.825 4.666c6.437-6.211 16.911-6.21 23.348 0 6.437 6.212 6.437 16.319 0 22.531z" />
                              </svg>
                          </div>
                          <div class="profile d-flex">
                              <div class="prof-img">
                                  <img src="../assets/img/group-33.png" alt="">
                              </div>
                              <div class="prof-details">
                                  <p class="prof-name">Lars Johnson</p>
                                  <p class="prof-city">Manchester</p>
                              </div>
                          </div>
                          <p class="prof-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum
                              metus pulvinar aliquet consequat. Praesent nec malesuada nibh.</p>
                          <p class="prof-txt">
                              Nullam et metus congue,
                              auctor augue sit amet, consectetur tortor.
                          </p>
                          <p class="read-more mb-0 mt-4">Read More <a href="#"><svg class="read-arrow"
                                      xmlns="http://www.w3.org/2000/svg" width="29" height="10">
                                      <path fill-rule="evenodd" fill="#4F4F4F"
                                          d="M.1 3.725h21.392C20.456 2.263 19.94 1.31 19.887.1c2.357 2.151 5.421 3.318 9.213 4.414-3.792 1.051-6.721 2.334-9.213 4.696.573-1.602.589-2.454 1.637-4.009H.1V3.725z" />
                                  </svg></a></p>
                      </div>
                  </div>
              </div>
          </div>
  </section>
  <section class="footer">
    <div class="container">
        <div class="row justify-content-center py-4">
            <div class="col-lg-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="106"
                    height="78">
                    <image width="106" height="78"
                        xlink:href="data:img/png;base64,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" />
                </svg>
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
    <div class="row justify-content-center text-center align-content-center privacy py-2">
        <div class="col-lg-10">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat nunc libero, ac malesuada
                ligula
                aliquam
                ac. <a href="#" class="policy"> Privacy Policy</a></p>
        </div>
        <div class="col-lg-2">
            <a href="#" class="btn-end">Ok!</a>
        </div>
    </div>
</section>
<div class="home-btn">
    <a href="#">
        <div class="up-arrow">
          <center>
          <img id="last-icon" src="../assets/img/forma-1.png">
          </center>
        </div>
    </a>
</div>
<script src="../assets/homepage.js"></script>   
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>