<?php
/*
Author:	Doug Kirkman
Date: 4/17/2019
Name:DataMissingException Exception
Description:  DataMissingException class
*/
class DataMissingException extends Exception {
    public function getDetails() {
        return "Fatal Error:<br> Data is missing from form";
    }
}
?>