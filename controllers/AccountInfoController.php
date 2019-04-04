<?php

requrie_once("dbconnect.php");
    class AccountController {
        $private myAccount;

        public __construct() {
           // $this->myAccount = new $myAccount;
        }

        public checkBalance() {
            return $myAccount->getBalance();
        }
    }

?>