<?php 

require_once __DIR__ . "/User.php";
require_once __DIR__ . "/Cart.php";

class PremiumUser extends User {

    use Cart;

    protected $membership;
    public $cart;
    protected $discount;

    public function __construct($_name, $_surname, $_email, $_membership)
    {
        parent::__construct($_name, $_surname, $_email);
        $this->membership = $_membership;
    }

    public function setMembership($_membership)
    {
        if (!is_int($_membership)) {
            throw new Exception("Il valore non è valido");
        } else if ($_membership < 1 || $_membership > 3) {
            throw new Exception("Il valore della Membership non è valido");
        } else {
            $this->membership = $_membership;
        }
    }

    public function getMembership()
    {
        return $this->membership;
    }

    public function setDiscount($_membership)
    {
        $this->discount = $_membership * 10;
    }
}