<?php

require_once("../application/database.php");

if(isset($_POST["ModifyButton"])) {
    echo "working";
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $Email = $_POST["Email"];
    $sql = "UPDATE account SET FirstName = '$FirstName', Lastname = '$LastName', Email  = '$Email'  WHERE AccountNumber = 1";
    
    echo $sql;

    $result = $conn->query($sql);
    
    header("Location: ../views/Account.php");
}

?>