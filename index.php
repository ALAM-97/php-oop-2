<?php

require_once __DIR__ . "./classes/User.php";
require_once __DIR__ . "./classes/Product.php";

// inserisco due nuovi utenti
$user1 = new User("Matteo", "Rossi", "matteo.rossi@gmail.com");
$user2 = new User("Giorgio", "Verdi", "giorgio.verdi@gmail.com");

// inserisco dei nuovi prodotti
$product1 = new Product("Iron", "54,50€", "Home appliances");
$product2 = new Product("Gaming Mouse", "23,00€", "Gaming Hardware");
$product3 = new Product("Tv", "430,00€", "Home appliances");

//inserisco degli utenti PREMIUM
$PremiumUser1 = new PremiumUser("Alessandro", "Bianchi", "alessandro.bianchi@gmail.com", 2);