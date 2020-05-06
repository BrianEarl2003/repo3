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

  <body onload="focusFirstName()">
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
        <li class="mb" style="float:right"><a class="active" href="viewCart.php">
            <i class="fa fa-shopping-cart"></i>Shopping Cart</a></li>
      </ul> <!-- end menuBar -->
    </header>
    <hr><!--start Order Form-->
    <form id="form" onreset="clr()" onsubmit="return false" id="OF" name="orderForm"
          class="product" action="">
      <fieldset>
        <legend>Order Form</legend>
        First Name<br>
        <div class="inputError">
          <input onInput="this.innerHTML = filledFirstName()"
                 id="firstName" type="text" name="first_name">
          <p id="firstNameP" class="message"></p>
        </div>
        Last Name<br>
        <div class="inputError">
          <input onInput="this.innerHTML = filledLastName()"
                 id="lastName" type="text" name="last_name">
          <p id="lastNameP" class="message"></p>
        </div>
        Address<br>
        <div class="inputError" id="addressDiv">
          <textarea rows="3" cols="40" onInput="filledAddress()"
                    id="addressField" name="address"></textarea>
          <p id="addressP" class="message"></p>
        </div>
        Phone Number<br>
        <div class="inputError">
        <input onInput="this.innerHTML = validatePhoneNumber()"
               id="phoneNumber" type="text" name="phone">
        <p id="phoneP" class="message"></p>
        </div>
        <hr>
        Macaron order:<br>
        <input onclick="total()" type="checkbox" name="item_0" value="halloween">
        Halloween - $24<br>
        <input onclick="total()" type="checkbox" name="item_1"
               value="deathByChocolate"> Death By Chocolate - $24<br>
        <input onclick="total()" type="checkbox" name="item_2" value="birthdayHeart">
        Birthday Heart - $2.50<br>
        <input onclick="total()" type="checkbox" name="item_3" value="twirlySwirly">
        Twirly Swirly - $50
        <div class="inputError">
        <div id="totalDiv">Total:</div>
        <p id="totalP" name="total" class="message"></p>
        </div>
        <hr>
        Credit Card:<br><br>
        <div class="inputError">
          <div>
            <input onchange="validateCardName()" type="radio" name="card"
                   id="visa" value="visa"> visa<br>
            <input onchange="validateCardName()" type="radio" name="card"
                   id="mastercard" value="mastercard"> mastercard<br>
            <input onchange="validateCardName()" type="radio" name="card"
                   id="americanExpress" value="american express"> american express
          </div>
          <p id="cardNameP" class="message"></p>
        </div><br>
        <hr>
        Credit Card Number<br>
        <div class="inputError">
        <input onInput="validateCardNumber()"
               id="creditCard" type="text" name="credit_card">
        <p id="creditCardP" class="message"></p>
        </div>
        Credit Card Expiration Date<br>
        <div class="inputError">
        <input onInput="validateExpDate()"
               id="expDate" type="text" name="exp_date">
        <p id="expDateP" class="message"></p>
        </div>
        <div class="inputError">
          <div id="buttons">
            <button id="resetButton" type="reset">reset</button>
            <input onclick="validateForm()" id="submitButton"
                   value="validate" name="validate" type="submit"/>
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