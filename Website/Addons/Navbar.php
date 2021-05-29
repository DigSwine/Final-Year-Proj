<!-- Navigation Bar -->
<?php
    echo "<nav class='w3-sidebar w3-bar-block w3-small w3-hide-small w3-center'>";
    $loggedin = $_SESSION["loggedin"];
        if($loggedin == "false"){
            echo "<a href='index.php' class='w3-bar-item w3-button w3-padding-large w3-hover-black'>
                <h2>ABOUT</h2>
            </a>
            <a href='Login.php' class='w3-bar-item w3-button w3-padding-large w3-hover-black'>
                <h2>LOGIN</h2>
            </a>";
        } else {
            echo "<a href='index.php' class='w3-bar-item w3-button w3-padding-large w3-hover-black'>
                <h2>LOGOUT</h2>
            </a>
            <a href='Profile.php' class='w3-bar-item w3-button w3-padding-large w3-hover-black'>
                <h2>PROFILE</h2>
            </a>
            <a href='Virus.php' class='w3-bar-item w3-button w3-padding-large w3-hover-black'>
                <h2>VIRUS</h2>
            </a>
            <a href='Game.php' class='w3-bar-item w3-button w3-padding-large w3-hover-black'>
                <h2>GAME</h2>
            </a>";
        }
    ?>
</nav>
