<?php
const SeverHTML = 'proj-mysql.uopnet.plymouth.ac.uk';
const User = 'COMP3000_MWilsonSlider';
const Pass = 'BbfP602+';
const DataBase = 'comp3000_MWilsonSlider';


//Database connection - dont touch
function getConnection()
{
    $dataSourceName = 'mysql:dbname='.DataBase.';host='.SeverHTML;
    $dbConnection = null;
    try
    {
        $dbConnection = new PDO($dataSourceName, User, Pass);

    }  catch (PDOException $err)
    {
        echo 'Connection failed: ', $err->getMessage();
    }
    return $dbConnection;
}

//getters
function getAllDetails(){
    $_SESSION["Member_Email"] = getMemberEmail($_SESSION["Member_ID"]);
    $_SESSION["Member_Name"] = getMemberName($_SESSION["Member_ID"]);
}
function getMemberID($user, $unenpass){
    $statement = getConnection()->prepare("SELECT Member_ID FROM members WHERE Member_Username = '" . $user . "' AND Member_Pass = '" . $unenpass . "'");
    $statement->execute();
    $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);
    return stringit($resultSet);
}
function getMemberEmail($ID){
    $statement = getConnection()->prepare("SELECT Member_Email FROM members WHERE Member_ID = '" . $ID . "'");
    $statement->execute();
    $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);
    return stringit($resultSet);
}
function getMemberName($ID){
    $statement = getConnection()->prepare("SELECT Member_Name FROM members WHERE Member_ID = '" . $ID . "'");
    $statement->execute();
    $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);
    return stringit($resultSet);
}
function getMemberPass($ID){
    $statement = getConnection()->prepare("SELECT Member_Pass FROM members WHERE Member_ID = '" . $ID . "'");
    $statement->execute();
    $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);
    return stringit($resultSet);
}
function compareUsers($user){
    $statement = getConnection()->prepare("SELECT Member_User FROM members WHERE Member_User = '" . $user . "'");
    $statement->execute();
    $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);
    return stringit($resultSet);
}
function getlocationcomps($loc){
        $statement = getConnection()->prepare("SELECT Location_CompDensity FROM locations WHERE Location_Name = '" . $loc . "'");
        $statement->execute();
        $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);
        return stringit($resultSet);
}

//senders
function addNewUser($name, $email, $user, $pass){
    $statement = getConnection()->prepare("INSERT INTO `members` (`Member_ID`, `Member_Name`, `Member_Email`, `Member_Username`, `Member_Pass`) VALUES (NULL, '" . $name . "', '" . $email . "', '" . $user . "', '" . $pass . "');");
    $statement->execute();
}
function editUserDetails($name, $email, $user, $pass, $id){
    $statement = getConnection()->prepare("UPDATE `members` SET `Member_Name` = '" . $name . "', `Member_Email` = '" . $email . "', `Member_Username` = '". $user . "',`Member_Pass` = '" . $pass . "' WHERE 'Member_ID' = '". $id . "';");
    $statement->execute();
}
//useful
function stringit($in)
{
    $send = "";
    if ($in != null) {
        foreach ($in as $row) {
            foreach ($row as $cell) {
                $send = $cell;
            }
        }
    }
    if ($send == "") {
        return "";
    } else {
        return $send;
    }
}