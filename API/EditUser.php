<?php
include_once "Functions.php";
session_start();
if (isset($_POST["values"])) {
    //get value and store it
    $data = json_decode($_POST["values"]);

    # //pull apart the variables and sort them into local variables
    $_SESSION['Member_Name'] = $data->Name;
    $_SESSION['Member_Email'] = $data->Email;

    if($_SESSION["Member_ID"] != null){
        editUserDetails($_SESSION['Member_Name'], $_SESSION['Member_Email'], $_SESSION['Member_User'], $_SESSION['Member_Pass'], $_SESSION['Member_ID']);
    } else {

    }
}
