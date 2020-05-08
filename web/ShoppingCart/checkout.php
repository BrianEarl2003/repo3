<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8"/>
    <title>Wasatch Macarons Order Form</title>
    <!--for shopping cart icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-aw\
esome/4.7.0/css/font-awesome.min.css">
    <!--for google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Creepster|Sat\
isfy&display=swap" rel="stylesheet">
    <!--CSS modifications-->
    <link rel="stylesheet" type="text/css" href="03prove.css">
  </head>

  <body onload="focusStreetAddress()">
    <!--webpage header-->
    <header>
        <div id="logo"><img id="WMlogo" src="https://www.logolynx.com/images/logolynx/s_2f/2f187fa92e29505d7654144fb12b6068.png" alt="WM Logo">
            <h1 id="slogan">Be a macaron in a cookie cutter world.</h1>
        </div>
        <ul id="menuBar">
        <li class="mb"><a href="#header">Home</a></li>
        <li class="mb"><a href="browseItems.php">Products</a></li>
        <li class="mb"><a href="#header">Sign in/Join us</a></li>
        <li class="mb"><a href="#header">Locate a Store</a></li>
        <li class="mb" style="float:right"><a href="viewCart.php">
            <i class="fa fa-shopping-cart"></i>Shopping Cart</a></li>
      </ul> <!-- end menuBar -->
    </header>
    <hr><!--start Order Form-->
    <form id="form" onreset="clr()" onsubmit="return validateForm()" id="OF" name="orderForm"
          class="product" action="confirmationPage.php" method="POST">
      <fieldset>
        <legend>Order Form</legend>
        Street Address<br>
        <div class="inputError">
          <input onInput="this.innerHTML = filledStreetAddress()"
                 id="streetAddress" type="text" name="street_address">
          <p id="streetAddressP" class="message"></p>
        </div>
        City<br>
        <div class="inputError">
          <input onInput="this.innerHTML = filledCity()"
                 id="city" type="text" name="city">
          <p id="cityP" class="message"></p>
        </div>
        State<br>
        <div class="inputError" id="addressDiv">
          <input onInput="filledState()"
                    id="state" name="state">
          <p id="stateP" class="message"></p>
        </div>
        Zip<br>
        <div class="inputError">
        <input onInput="this.innerHTML = validateZip()"
               id="zip" type="text" name="zip">
        <p id="zipP" class="message"></p>
        </div>
        <hr>
        <div class="inputError">
          <div id="buttons">
            <button id="resetButton" type="reset">Reset</button>
            <button onclick="location.href='viewCart.php';"
                    id="goToCart" type="button">View Cart</button>
            <input onclick="validateForm();" id="submitButton"
                   value="Purchase" name="validate" type="submit"/>
          </div>
          <p id="validateP" class="message"></p>
        </div>
      </fieldset>
    </form>
    <hr><!--end Order Form-->
    <!--footer-->
    <footer>
      <img id="ITF" src="https://www.pngkey.com/png/full/306-3069107_logos-for-\
instagram-twitter-and-facebook-facebook-instagram.png" alt="Instagram Twitter F\
acebook">
      <table>
        <tr>
          <td><a id="au" href="#header">ABOUT US</a></td>
          <td>CONTACT US</td>
        </tr>
        <tr>
          <td>CAREERS</td>
          <td>ALL LOCATIONS</td>
        </tr>
        <tr>
          <td>SITEMAP</td>
        </tr>
      </table>
      <p>Copyright 2019 Wasatch Macarons</p>
      <ul id="footerLinks">
        <li><a class="fl" href="#footer">Accessibility Policy</a></li>
        <li class="f2">|</li>
        <li><a class="fl" href="#footer">Privacy</a></li>
        <li class="f2">|</li>
        <li><a class="fl" href="#footer">Terms of Use</a></li>
        <li class="f2">|</li>
        <li><a class="fl" href="#footer">Compliance</a></li>
      </ul>
    </footer>
    <script src="03prove.js"></script>
  </body>
</html>
