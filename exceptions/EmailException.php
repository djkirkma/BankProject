<?php
/*
Author:	Doug Kirkman
Date: 4/17/2019
Name:EmailException Exception
Description:  EmailException class
*/
class EmailException extends Exception {
    public function getDetails() {
        return "Fatal Error:<br> Email is in wrong format";
    }
}
?>