<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L’e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->

<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Cibo.php";
require_once __DIR__ . "/Giochi.php";

$product = new Product(25, "pallina");
$giochi = new Giochi(30, "corda", "verde", "15cm");
$cibo = new Cibo(27, "crocchette", "pollo", "20 Maggio");

var_dump($product);
var_dump($cibo);
var_dump($giochi);