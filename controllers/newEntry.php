<?php

require_once("../exceptions/DataMissingException.php");
require_once("../application/database.php");

if(isset($_POST["createAccountSubmit"])) {
    try {
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $Email = $_POST["Email"];
    $password = $_POST['password'];
    if ($FirstName == "" || $LastName == "" || $Email == "" || $password == "") {
        throw new DataMissingException();
    }

    $sql = "Insert INTO account (FirstName, LastName, password, Email) VALUES ('"  . $FirstName . "','"  . $LastName . "','" . $password ."','"  . $Email . "')";

    $result = $conn->query($sql);
    
    header("Location: ../views/Success.php");
    }
    
    catch (DataMissingException $e){
        $message = $e->getDetails();
        header("Location: ../views/error.php?message=$message");
    }
}

?>