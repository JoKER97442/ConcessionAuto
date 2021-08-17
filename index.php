<?php
require './User.php';
require './Directeur.php';
require './Vendeur.php';
require './Secretaire.php';
require './Client.php';

$directeur = new Directeur();
// var_dump($directeur);

$vendeur = new Vendeur();
// var_dump($vendeur);

$secretaire = new Secretaire();
// var_dump($secretaire);

$client = new Client();
// var_dump($client);

    








$voitures =  [
    'Mercedes' => '200000',
    'Orange_familiale' => '150000',
    'Mini' => '10000',
    'Mazda' => '25000'
]; 
if (isset($_POST['voiture']) && !empty($_POST['voiture'])) {
    $myVoiture = $_POST['voiture'];
 } else {
     $myVoiture = 'Mini';
 };

require './views/homePage.phtml';
?>