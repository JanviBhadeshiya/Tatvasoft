<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sign up</title>

</head>
<?php
$base_url="../index1.php";
?>

<body>
<section class="home">
      <nav class="navbar navbar-expand-lg" id="navinav">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="../assets/img/footer-logo.png" id="header_logo">
          </a>
          <div class=" text-center">
            <button id="bookcleaner" href="#">Book a Cleaner</button>
            <a class="header-navbar" href="prices.php">Prices</a>
            <a class="header-navbar" href="#">Our Guarantee</a>
            <a class="header-navbar" href="#">Blog</a>
            <a class="header-navbar" href="ContactUs.php">Contact us</a>
            <button id="loginbttn" class="sp-btn"data-toggle="modal" onclick="login()" data-target="#myModal">Login</button>
            
                                
            <button id="becomehelper" class="sp-btn">Become a Helper</button>

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
</section>

    <section class="form_sec">
    <form method="post"  action=<?= $base_url."./?controller=helperland&function=InsertUser"?>>
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" class="form-control" id="firstName" name="firstname" placeholder="First Name" require>
            <div class="first-name-msg"></div>

          </div>
          <div class="form-group col-md-6">
            <input type="text" class="form-control" id="lastname"name="lastname" placeholder="Last Name" require>
            <div class="last-name-msg"></div>  
          </div>
        </div>
  
        <div class="form-row">
            <div class="form-group col-md-6">
              <input type="email" class="form-control check_email" id="useremail" name="email" placeholder="E-mail address" require>
              <div class="email-msg float-left"></div>
              <div class="error-email float-right"></div> 

            </div>
            <div class="form-group col-md-6">
                <label class="sr-only" for="inlineFormInputGroup" require>Username</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">+49</div>
                  </div>
                  <input type="tel" class="form-control" id="mobilenum" name="mobile" placeholder="Mobile number" maxlength="10" size="10" require>
                </div>
                <div class="mobile-msg"></div>
              </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" require>
       <div class="password-msg"></div>
        </div>
        <div class="form-group col-md-6">
          <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" require>
          <div class="cpassword-msg"></div>

        </div>
      </div>
      <div class="form-row form-check mb-2">
            <input
              class="form-check-input"
              type="checkbox"
              id="inlineFormCheck"
              name="privacy"
              checked
            />
            <label class="form-check-label" for="inlineFormCheck">
              I have read the <a href="#" class="privacy-policy">privacy policy</a>
            </label>
           
            <div class="checbox-msg"></div>
      </div>
   
     <div class="form-row register-submit mt-3">
        <button type="submit" id="loginbttn2" class="sp-btn" name="CustomerSignup">Register</button>
       </div>

    </form>
    <div class="already-registered mt-3">
        <p>Already registered?  <a href="index.php#myModal" id="login-btn" class="login-btn">Login Now</a></p>
    </div>
    <!-- <form>

    <div class="popup" id="popup">
                <div class="popup-content" id="popup-content">
                
                <input type="text" placeholder="Email">
                <input type="password" placeholder="Password">
                
                <button id="loginbttn2" class="sp-btn"data-toggle="modal">Login</button>
                 <div><a href="#" style="color: #0d6efd;"onclick="forget_password();">Forget Password</a></div>
                <div>Already have account? <a href="#" onclick="login()" style="color: #0d6efd;">Log in</a></div> 
                </div>
              </div>
    </form>
              <form>
              <div class="popup2" id="popup">
                <div class="popup-content" id="popup-content">
                <span class="close"> &times;</span>
                <input type="text" placeholder="Email">
                <input type="password" placeholder="Password">
                <button id="loginbttn2" class="sp-btn"data-toggle="modal">Login</button>
                 <div><a href="#" style="color: #0d6efd;"onclick="forget_password();">Forget Password</a></div>
                <div>Don't Have Account? <a href="../View/sign_up.php" style="color: #0d6efd;">Create Account</a></div> 
                </div>
              </div>
              </form> -->
    </section>  
    <section>
        <?php
        include ('../View/footer.php')


         ?>
    </section>
    <script src="../assets/homepage.js"></script>   
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>