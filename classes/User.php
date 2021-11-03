<?php

require_once __DIR__ . "/PremiumUser.php";

class User {
    private $name;
    private $surname;
    private $email;

    public function __construct($_name, $_surname, $_email)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }
}