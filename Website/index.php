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
                <h3>About Hacker Adversary</h3>
                    <p>This game aim's to help students at the University of Plymouth to learn key terms and the components that build a virus, as well as some of the best types of virus’s that 
                    are used to cause harm to a network.</p>
                <h3>The Aim of the website</h3>
                    <p>The project aim’s to be used by computer security students at the University of Plymouth,
                        the main aim of the project is to offer support for students who have difficulty learning
                        how to make virus’s by including a builder and a testing section – this will be made to
                        appear like a game to make the tool more inviting. As the virus was inspired by a game
                        (Plague Inc.) the name I have chosen is “Hacker Adversary”. The project will be made on either
                        a C# application hosted by Visual Studio or a Web Application. The Reason behind this project
                        is to have a friendly tool to help students who are interested in virus’s and virus protection.
                    </p>
                <h3>Instructions</h3>
                    <p>Create a virus on the virus page and select Confirm once the virus had been created, 
                        the go to the game page and select what continent’s you want to start the virus in, 
                        then watch as the world’s networks starts to slowly become infected.
                    </p>
                <h3>Rules</h3>
                    <p>Hack the world to successfully infect each computer unit that had been sold in each continent.<p>
            </div>
        </div>
    </body>
</html>
<?php
include_once "Addons/Footer.php";
?>