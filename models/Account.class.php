<?php
class Account{
    private $firstname;
    private $lastname;
    private $email;
    private $balance;

    public __construct($firstname, $lastname, $email,$balance) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->balance = $balance;
    }
    public getFirstName() {
        return $this->firstname;
    }
    public getLastName() {
        return $this->lastname;
    }
    public getEmail() {
        return $this->email;
    }
    public getBalance() {
        return  $this->balance;
    }

    // seperator
    public setFirstName($firstname) {
        $this->firstname = $firstname;
    }
    public setLastName($lastname) {
        $this->lastname = $lastname;
    }
    public setEmail($email) {
        $this->email = $email;
    }
}

?>