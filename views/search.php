<?php
if(isset($_GET["query-terms"])) {
    echo "Fatal Error: Feature " . $_GET["query-terms"] . " was not found";
    if($_GET["query-terms"] == "Deposit") {
        
        header("Location: ../views/Deposit.php");
    }
    if($_GET["query-terms"] == "Transfer") {
        
        header("Location: ../views/Transfer.php");
    }
    if($_GET["query-terms"] == "Create Account") {
        
        header("Location: ../views/CreateAccount.php");
    }
}

?>