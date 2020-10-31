<?php
const SeverHTML = 'proj-mysql.uopnet.plymouth.ac.uk';
const User = 'COMP3000_MWilsonSlider';
const Pass = 'BbfP602+';
const DataBase = 'comp3000_MWilsonSlider';


//dont touch
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
    $_SESSION["Member_User"] = getMemberUser($_SESSION["Member_ID"]);
    $_SESSION["Member_Pass"] = getMemberPass($_SESSION["Member_ID"]);
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
function getMemberUser($ID){
    $statement = getConnection()->prepare("SELECT Member_Username FROM members WHERE Member_ID = '" . $ID . "'");
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

//senders


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