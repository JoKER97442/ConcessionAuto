<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=concessionauto', 'root', '');
} catch(PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$pdo->exec('SET NAMES UTF8');


?>