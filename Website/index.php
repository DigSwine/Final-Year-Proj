<?php
session_start();
$_SESSION["loggedin"] = "false";
include "Addons/Navbar.php";
include_once "Addons/Sytlesheet.php";
include_once "Addons/Header.php";
?>
<!DOCTYPE html>
<html>
    <body>

        <div style="padding-left: 20px">
            <div class="w3-padding-16 w3-content w3-text-grey" id="contact">
                <h3>About Virus inc.</h3>
                    <p>Virus is a game which </p>

                <h3>The Aim of the website</h3>
                    <p>To help the user understand how to make virus's and how fast they can spread by,
                    allowing the user to make a virus and then release it into a simulation</p>
            </div>
        </div>
    </body>
</html>
<?php
include_once "Addons/Footer.php";
?>