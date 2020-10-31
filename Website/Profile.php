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
    <div class="w3-padding-16 w3-content w3-text-grey" id="contact">
        <p>Personal Data</p>
        <form action="/action_page.php" target="_blank">
            <p><input class="w3-input w3-padding-16" type="text" placeholder="<?php var_dump($_SESSION); ?>" required name="Name"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
            <p><input  type="submit" style="padding-top: 10px; padding-bottom: 10px; width: 100%" id="btn_save" value="Save"></p>
        </form>
    </div>
</div>
<?php
include_once "Addons/Footer.php";
?>
</body>
</html>
