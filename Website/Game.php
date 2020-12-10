<?php
session_start();
$_SESSION["loggedin"] = "true";
include "Addons/Navbar.php";
include_once "Addons/Sytlesheet.php";
include_once "Addons/Header.php";
?>
<!DOCTYPE html>
<html>
<body>
<!-- Page Content -->
<div id="main">
    <div class="w3-padding-16 w3-content w3-text-grey" id="gamearea" style="background-color: papayawhip; height: 425px">


    </div>
</div>
<?php
include_once "Addons/Footer.php";
?>
</body>
</html>
