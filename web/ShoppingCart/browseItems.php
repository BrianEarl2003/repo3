<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8"/>
    <title>Wasatch Macarons Products Page</title>
    <!--for shopping cart icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-aw\
esome/4.7.0/css/font-awesome.min.css">
    <!--for google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Creepster|Sat\
isfy&display=swap" rel="stylesheet">
    <!--CSS modifications-->
    <link rel="stylesheet" type="text/css" href="03prove.css">
</head>

<body>
  <!--webpage header-->
  <header>
    <div id="logo"><img id="WMlogo" src="https://www.logolynx.com/images/logolynx/s_2f/2f187fa92e29505d7654144fb12b6068.png" alt="WM Logo">
    <h1 id="slogan">Be a macaron in a cookie cutter world.</h1>
    </div>
    <ul id="menuBar">
      <li class="mb"><a href="#header">Home</a></li>
      <li class="mb"><a class="active" href="browseItems.php">Products</a></li>
      <li class="mb"><a href="#header">Sign in/Join us</a></li>
      <li class="mb"><a href="#header">Locate a Store</a></li>
      <li class="mb" style="float:right"><a href="viewCart.php"><i class="fafa-shopping-cart"></i>
          Shopping Cart</a></li>
    </ul> <!-- end menuBar -->
  </header>
  <!--list of products-->
  <div id="hm">
    <h1 class="product1">
      <img class="pil" src="https://i.pinimg.com/originals/bd/f6/d6/bdf6d6c870edcc9d5f53fc4c843ecb6f.jpg" alt="three macarons">
      <img class="pir" src="https://66.media.tumblr.com/191338ce8b0c1599bc6ce59dfce82275/tumblr_phdjv0drFu1r8jkpuo1_1280.jpg" alt="package of macarons">
      Halloween Macarons</h1>
    <p class="description">
      A box of a dozen Halloween Macarons<br> comes with three spooky flavors:<br>
<span style="color:orange">4 Pumpkin Spice,</span>
<span style="color:purple">4 Caramel Apple Butter and </span><br>
<span style="color:brown">4 Marshmallow Buttercream with Candybar toppings.
</span><br>
</p>
<form class="form">
Price: $24/box | Quantity:
<input type="text" name="hQuantity" value="<?php echo $hQuantity ?>">
<input type="submit" value="Add to Shopping Cart">
</form>
</div>

<hr>

<div id="dbcm">
<h1 class="product1">
<img class="pil" src="https://sugargeekshow.com/wp-content/uploads/2019/12/chocolate-macaron-recipe-320x320.jpg.webp" alt="messy chocolate macarons">
<img class="pir" src="https://madaboutmacarons.com/wp-content/uploads/2014/03/chocolate-macarons-in-treasure-paper-box.jpg" alt="package of chocolate macarons">
Death by Chocolate Macarons</h1>
<p class="description">
A box of a dozen Death by Chocolate Macarons<br>
comes with four varieties:
<span style="color:burlywood">3 Chocolate Smore's,</span><br>
<span style="color:chocolate">3 Chocolate Brownie,</span>
<span style="color:brown">3 Chocolate Peanut Butter and </span><br>
<span style="color:darkgoldenrod">3 Chocolate Salted Caramel.
</span><br>
</p>
<form class="form">
Price: $24/box | Quantity:
<input type="text" name="cQuantity" value="<?php echo $cQuantity ?>">
<input type="submit" value="Add to Shopping Cart">
</form>
</div>

<hr>

<div id="bhm">
<h1 class="product1">
<img class="pil" src="https://devilsfoodkitchen.com/wp-content/uploads/2018/02/BLEEDING_HEART_MACARON_54-600x476.jpg" alt="one heart macaron">
<img class="pir" src="https://static.wixstatic.com/media/75d275_d5358b43e7ff444f849473b0a13619e5~mv2.jpg/v1/fill/w_1160,h_840,al_c,q_85,usm_0.66_1.00_0.01/75d275_d5358b43e7ff444f849473b0a13619e5~mv2.jpg" alt="many heart macarons">
Birthday Heart Macarons</h1>
<p class="description">
Single Birthday Heart Macarons made from:<br>
<span style="color:blue">Blue Colored Vanilla Shells,</span><br>
<span style="color:red">Covered with Multi-colored Sprinkles,</span><br\
>
<span style="color:gold">filled with Birthday Cake and Funfetti Frosting.
</span><br>
</p>
<form class="form">
Price: $2.50/macaron | Quantity:
<input type="text" name="bQuantity" value="<?php echo $bQuantity ?>">
<input type="submit" value="Add to Shopping Cart">
</form>
</div>

<hr>

<div id="tsm">
<h1 class="product1">
<img class="pil" src="http://www.makermegramon.com/wp-content/uploads/2017/07/74980_647892192016674_6038547037082257600_n-1-300x300.jpg" alt="side of swirl macaron">
<img class="pir" src="http://www.makermegramon.com/wp-content/uploads/2017/07/10409325_647892222016671_204817099117904864_n-1-300x300.jpg" alt="package of swirl macarons">
Twirly Swirly Macarons</h1>
<p class="description">
A box of 25 Blue and Purple Twirly Swirly Macarons<br> comes with five filling flavors:
<span style="color:dimgray">5 Cookies and Cream,</span><br>
<span style="color:saddlebrown">5 Fudge, 5 Hot Chocolate with Mini-Marshmallows,</span><br>
            <span style="color:green">5 Chocolate Mint and 5 Pistachio.
            </span><br>
          </p>
          <form class="form">
            Price: $50/box | Quantity:
            <input type="text" name="tQuantity" value="<?php echo $tQuantity ?>">
            <input type="submit" value="Add to Shopping Cart">
          </form>
        </div>
        <!--end of product list-->
        <hr>
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
      </body>
    </html>
    