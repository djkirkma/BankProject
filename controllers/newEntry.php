<?php

require_once("../application/database.php");

if(isset($_POST["createAccountSubmit"])) {
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $Email = $_POST["Email"];

    $sql = "Insert INTO account (FirstName, LastName, Email) VALUES ('"  . $FirstName . "','"  . $LastName . "','"  . $Email . "')";

    $result = $conn->query($sql);
    
    header("Location: ../views/Success.php");
}

?>