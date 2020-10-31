<?php
include_once "Functions.php";

if (isset($_POST["values"])) {
    //get value and store it
    $data = json_decode($_POST["values"]);

    # //pull apart the variables and sort them into local variables
    $name = $data->Name;
    $email = $data->Email;
    $user = $data->User;
    $conuser = $data->ConUser;
    $pass = $data->Password;
    $conpass = $data->ConPass;

    $username = compareUsers($user);
    echo $username;
    if($username == null){
       # addNewUser();
        echo "sentdata";
    } else {
        echo "exists";
    }
}