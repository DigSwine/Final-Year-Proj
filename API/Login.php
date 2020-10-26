<?php
include_once "Functions.php";

if (isset($_POST["User"])) {
    $_SESSION["Member_ID"] =  getMemberID($_POST["User"], $_POST["Pass"]);
    if($_SESSION["Member_ID"] != null) {
        $_SESSION["loggedin"] = "true";
        getAllDetails();
    } else {
        echo "up";
    }
}