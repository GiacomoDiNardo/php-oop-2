<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L’e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->

<?php

require_once __DIR__ . "/classi/Customer.php";
require_once __DIR__ . "/classi/Cibo.php";
require_once __DIR__ . "/classi/Giochi.php";
require_once __DIR__ . "/classi/MetodoPagamento.php";

$customer = new Customer();
$customer->register("asd", "Dini");
$customer->gestorePagamenti->add(new MetodoPagamento("mastercard", "5165422146", "548", "10/23"));

$products = [
    new Cibo(13.40, "crocchette", ["farina", "pollo", "conservanti"], "12/22"),
    new Cibo(10.80, "dentastix", ["farina", "droga per cani", "conservanti"], "12/24"),
    new Giochi(15.65, "pallina", "verde", "30cm"),
    new Giochi(9.99, "osso giocattolo", ["grigio", "bianco"], "50cm"),
];

$customer->cart->add($products[0]);
$customer->cart->add($products[3]);


$customer->checkout(0); 
 