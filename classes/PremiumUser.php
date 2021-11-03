<?php 

require_once __DIR__ . "/User.php";

class PremiumUser extends User {

    private $membership;

    public function __construct($_name, $_surname, $_email, $_membership)
    {
        parent::__construct($_name, $_surname, $_email);
        $this->membership = $_membership;
    }

    public function setMembership($_membership)
    {
        $this->membership = $_membership;
    }

    public function getMembership()
    {
        return $this->membership;
    }

    public function setDiscount($_membership)
    {
        if ( !is_int($_membership) ) {
            throw new Exception("Il valore non è valido");
        }

        if ( $_membership != 1 || $_membership != 2 || $_membership != 3 ) {
            throw new Exception("Il valore della Membership non è valido");
        }

        if ( $_membership = 3) {
            $this->sconto = 30;
        } else if ( $_membership = 2 ) {
            $this->sconto = 20;
        } else if ($_membership = 1 ) {
            $this->sconto = 10;
        }
    }
}