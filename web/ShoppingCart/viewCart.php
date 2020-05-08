<?php
session_start();
if (isset($_POST["hQuantity"]) && isset($_POST["cQuantity"]) && isset($_POST["bQuantity"]) && isset($_POST["tQuantity"])){
$_SESSION["hQuantity"] = htmlspecialchars($_POST["hQuantity"]);
$_SESSION["cQuantity"] = htmlspecialchars($_POST["cQuantity"]);
$_SESSION["bQuantity"] = htmlspecialchars($_POST["bQuantity"]);
$_SESSION["tQuantity"] = htmlspecialchars($_POST["tQuantity"]);
}
if (isset($_POST["item"]) && $_POST["item"] == "hm") {
    $_SESSION["hQuantity"] = htmlspecialchars($_POST["quantity"]);
}
if (isset($_POST["item"]) && $_POST["item"] == "cm") {
    $_SESSION["cQuantity"] = htmlspecialchars($_POST["quantity"]);
}
if (isset($_POST["item"]) && $_POST["item"] == "bm") {
    $_SESSION["bQuantity"] = htmlspecialchars($_POST["quantity"]);
}
if (isset($_POST["item"]) && $_POST["item"] == "tm") {
    $_SESSION["tQuantity"] = htmlspecialchars($_POST["quantity"]);
}

include 'header.php';
echo '<hr><div id="dbcm" class="product">';

// Echo session variables that were set on previous page
echo "In your cart, you have " . $_SESSION["hQuantity"] . " box(es) of Halloween Macarons,<br>";
echo " " . $_SESSION["cQuantity"] . " box(es) of Chocolate Macarons,";
echo " " . $_SESSION["bQuantity"] . " Birthday Heart Macarons,";
echo " " . $_SESSION["tQuantity"] . " box(es) of Twirly Swirly Macarons.";
echo '<form class="form" action="" method="POST">
Change Quantity for an Item<br>
<label for="item">Item:</label>
<select id="item" name="item">
  <option value="hm">Halloween</option>
  <option value="cm">Death by Chocolate</option>
  <option value="bm">Birthday Heart</option>
  <option value="tm">Twirly Swirly</option>
</select><br>
Quantity:
<input onInput="" type="text" name="quantity">
<button id="removeItem" type="submit">Change Quantity</button>
</form></div>
<hr><div class="form">
<a href="browseItems.php" class="previous">&laquo; Browse Items</a>
<a href="checkout.php" class="next">Checkout &raquo;</a></div><hr>';
include 'footer.php'
?>

