<?php
/*
Author:	Doug Kirkman
Date: 4/17/2019
Name:DateException Exception
Description:  DateException class
*/
class DateException extends Exception {
    public function getDetails() {
        return "Fatal Error:<br> Date is in wrong format";
    }
}
?>