<?php
session_start();
session_destroy();
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
                    <p>The project aim’s to be used by computer security students at the University of Plymouth,
                        the main aim of the project is to offer support for students who have difficulty learning
                        how to make virus’s by including a builder and a testing section – this will be made to
                        appear like a game to make the tool more inviting. As the virus was inspired by a game
                        (Plague Inc.) the name I have chosen is “Virus Inc.”. The project will be made on either
                        a C# application hosted by Visual Studio or a Web Application. The Reason behind this project
                        is to have a friendly tool to help students who are interested in virus’s and virus protection.
                    </p>
            </div>
        </div>
    </body>
</html>
<?php
include_once "Addons/Footer.php";
?>