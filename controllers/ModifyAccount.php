<?php
require_once("../exceptions/DataMissingException.php");
require_once("../application/database.php");

if (isset($_POST["ModifyButton"])) {
    try {
        $FirstName = $_POST["FirstName"];
        $LastName = $_POST["LastName"];
        $Email = $_POST["Email"];
        if ($FirstName == "" || $LastName == "" || $Email == "") {
            throw new DataMissingException();
        }

        $sql = "UPDATE account SET FirstName = '$FirstName', Lastname = '$LastName', Email  = '$Email'  WHERE AccountNumber = 1";

        echo $sql;

        $result = $conn->query($sql);

        header("Location: ../views/Account.php");
    } catch (DataMissingException $e) {
        $message = $e->getDetails();
        header("Location: error.php?message=$message");
    }
}
