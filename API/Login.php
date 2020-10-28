<?php
include_once "Functions.php";

if (isset($_POST["values"])) {
    //get value and store it
    $data = json_decode($_POST["values"]);

    # //pull apart the variables and sort them into local variables
    $user = $data->User;
    $pass = $data->Password;

    $_SESSION["Member_ID"] = getMemberID($user, $pass);
    if($_SESSION["Member_ID"] != null){
        getAllDetails();
        echo "loggedin";
    } else {
        echo "nf";
    }
}