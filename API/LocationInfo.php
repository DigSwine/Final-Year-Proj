<?php
include_once "Functions.php";
if (isset($_POST["values"])) {
    //get value and store it
    $data = json_decode($_POST["values"]);

    $loc = $data->Location;

    $location = checkloc($loc);
    if($location != null){
        $density = getlocationcomps($location);
        $compsecur = getLocationSecur($location);
        echo $density;
        echo ", ";
        echo $compsecur;
    } else {

    }
}