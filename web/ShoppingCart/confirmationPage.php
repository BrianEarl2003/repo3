<?php
$streetAddress = htmlspecialchars($_POST["street_address"]);
$city = htmlspecialchars($_POST["city"]);
$state = htmlspecialchars($_POST["state"]);

session_start();
include 'header.php';
echo '<hr><div id="dbcm" class="product">';
echo "You have ordered " . $_SESSION["hQuantity"] . " box(es) of Halloween Macarons,<br>";
echo " " . $_SESSION["cQuantity"] . " box(es) of Chocolate Macarons,";
echo " " . $_SESSION["bQuantity"] . " Birthday Heart Macarons,";
echo " " . $_SESSION["tQuantity"] . " box(es) of Twirly Swirly Macarons.<br><br>";
echo "<hr>These items will ship to the following address:<br><br>";
echo " " .  $streetAddress . " <br>";
echo " " .  $city . ", " .  $state . " " .  $_POST["zip"] . "";
echo '</div><hr>';
include 'footer.php';
?>