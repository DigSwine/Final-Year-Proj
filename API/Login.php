<?php
include_once "Functions.php";
session_start();
if (isset($_POST["values"])) {
    //get value and store it
    $data = json_decode($_POST["values"]);

    # //pull apart the variables and sort them into local variables
    $_SESSION['Member_User'] = $data->User;
    $_SESSION['Member_Pass'] = $data->Password;

    $_SESSION["Member_ID"] = getMemberID($_SESSION['Member_User'], $_SESSION['Member_Pass']);
    if($_SESSION["Member_ID"] != null){
        getAllDetails();
        echo "loggedin";
    } else {
        echo "nf";
    }
}