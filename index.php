<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->
<?php

include_once __DIR__ . '/user.php';
include_once __DIR__ . '/cc.php';
include_once __DIR__ . '/items.php';
include_once __DIR__ . '/cibo.php';
include_once __DIR__ . '/cucce.php';
include_once __DIR__ . '/giochi.php';
include_once __DIR__ . '/registered.php';

$marco = new User ('marco', 'rossi', 'marco@mail.com', 123464589123456, true);
$gioco = new Giochi ('freesbee', 23, 'cane', '55');
$sconto = $marco->getDiscount();
$prezzo = $gioco->getPrice($sconto);

var_dump($marco);
var_dump($gioco);
var_dump($sconto);
var_dump($prezzo);
