<?php
/*
Author:	Doug Kirkman
Date: 4/17/2019
Name:Database Exception
Description:  Login Exception class
*/
class LoginException extends Exception {
    public function getDetails() {
        return "Fatal Error:<br> No user currently logged in";
    }
}
?>