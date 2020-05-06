<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "You have ordered " . $_SESSION["hQuantity"] . " box(es) of Halloween Macarons,<br>";
echo " " . $_SESSION["cQuantity"] . " box(es) of Chocoate Macarons,";
echo " " . $_SESSION["bQuantity"] . " Birthday Heart Macarons,";
echo " " . $_SESSION["tQuantity"] . " box(es) of Twirly Swirly Macarons,";
?>

</body>
</html>