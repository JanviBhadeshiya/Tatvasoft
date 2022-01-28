<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About, PSD To HTML</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../assets/css/about-style.css" />
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
          <button id="priceandservice" href="#">Prices & service</button>
          <a class="header-navbar" href="#">Warranty</a>
          <a class="header-navbar" href="#">Blog</a>
          <a class="header-navbar" href="ContactUs.php">Contact</a>
          <button id="loginbttn" class="sp-btn">Login</button>
          <button id="becomehelper" class="sp-btn">Become a Helper</button>
        </div>
      </div>
    </nav>
    <!-- img-->
    <section class="faq-banner">
      <img
        src="../assets/img/hero-banner-img.png"
        alt="faqHeaderImage"
        style="max-width: 100%; height: auto"
      />
    </section>

    <!-- about texts -->
    <section class="few-word-about container">
      <div class="flex-column d-flex align-items-center justify-content-center">
        <div class="cleaningHeader1">A Few words about us</div>
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
      <div class="aboutText text-center">
        <div class="aboutInnerText">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
          molestie convallis tempor. Duis vestibulum vel risus condimentum
          dictum. Orci varius natoque penatibus et magnis dis parturient montes,
          nascetur ridiculus mus. Vivamus quis enim orci. Fusce risus lacus,
          sollicitudin eu magna sed, pharetra sodales libero. Proin tincidunt
          vel erat id porttitor. Donec tristique est arcu, sed dignissim velit
          vulputate ultricies.
        </div>
        <div class="aboutInnerText">
          Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac
          habitasse platea dictumst. Vivamus eget mauris eget nisl euismod
          volutpat sed sed libero. Quisque sit amet lectus ex. Ut semper ligula
          et mauris tincidunt hendrerit. Aenean ut rhoncus orci, vel elementum
          turpis. Donec tempor aliquet magna eu fringilla. Nam lobortis libero
          ut odio finibus lobortis. In hac habitasse platea dictumst. Mauris a
          hendrerit felis. Praesent ac vehicula ipsum, at porta tellus. Sed
          dolor augue, posuere sed neque eget, aliquam ultricies velit. Sed
          lacus elit, tincidunt et massa ac, vehicula placerat lorem.
        </div>
      </div>

      <div class="flex-column d-flex align-items-center justify-content-center">
        <div class="cleaningHeader1">Our Story</div>
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
      <div class="aboutText text-center">
        <div class="aboutInnerText">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
          molestie convallis tempor. Duis vestibulum vel risus condimentum
          dictum. Orci varius natoque penatibus et magnis dis parturient montes,
          nascetur ridiculus mus. Vivamus quis enim orci. Fusce risus lacus,
          sollicitudin eu magna sed, pharetra sodales libero. Proin tincidunt
          vel erat id porttitor. Donec tristique est arcu, sed dignissim velit
          vulputate ultricies.
        </div>
        <div class="aboutInnerText">
          Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac
          habitasse platea dictumst. Vivamus eget mauris eget nisl euismod
          volutpat sed sed libero. Quisque sit amet lectus ex. Ut semper ligula
          et mauris tincidunt hendrerit.
        </div>
        <div class="aboutInnerText">
          Aenean ut rhoncus orci, vel elementum turpis. Donec tempor aliquet
          magna eu fringilla. Nam lobortis libero ut odio finibus lobortis. In
          hac habitasse platea dictumst. Mauris a hendrerit felis. Praesent ac
          vehicula ipsum, at porta tellus. Sed dolor augue, posuere sed neque
          eget, aliquam ultricies velit. Sed lacus elit, tincidunt et massa ac,
          vehicula placerat lorem.
        </div>
      </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>
    <script src=".\js\bootstrap.bundle.min.js"></script>
  </body>
</html>
