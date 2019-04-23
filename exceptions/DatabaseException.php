<?php
/*
Author:	Doug Kirkman
Date: 4/17/2019
Name:Database Exception
Description:  Database Exception class
*/
class DatabaseException extends Exception {
    public function getDetails() {
        return "Fatal Error:<br> Database error";
    }
}
?>