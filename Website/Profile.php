<?php
session_start();
$_SESSION["loggedin"] = "true";
include "Addons/Navbar.php";
include_once "Addons/Sytlesheet.php";
?>
<!DOCTYPE html>
<html>
<body>

alert(<?php echo $test ?>);
<!-- Page Content -->
<div id="main">
    <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
        <p>Personal Data</p>
        <form action="/action_page.php" target="_blank">
            <p><input class="w3-input w3-padding-16" type="text" placeholder="<?php echo $_SESSION['Member_Name'] ?>" required name="Name"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
            <p>
                <button type="submit">
                    <i class="fa fa-paper-plane"></i> Save Message
                </button>
            </p>
        </form>
    </div>
</div>
<?php
include_once "Addons/Footer.php";
?>
</body>
</html>
