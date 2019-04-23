<?php
$servername = "localhost";
$username = "phpuser";
$password = "phpuser";
$dbname = "bank";

require_once("../exceptions/DatabaseException.php");
// Create connection
try {


$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    throw new DatabaseException();
    die("Connection failed: " . $conn->connect_error);
} 
}
catch (Exception $e) {
    $message = $e->getDetails();
    header("Location: ../views/error.php?message=$message");
}
?>