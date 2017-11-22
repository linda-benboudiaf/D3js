<?php
header ('Content-Type: application/json'); 
    // connexion a la bdd
    $bdd = new PDO('mysql:host=localhost;dbname=genea;charset=utf8', 'root', 'root');
    //je recupere le contenue d la table personne ... "data"

$data = $bdd->query('SELECT * FROM personne');


 
$data = $bdd->query('SELECT * FROM personne');
// On affiche chaque entrée une à une
$donnees = $data->fetchall(); 

    echo json_encode($donnees);

    $data->closeCursor(); // Termine le traitement de la requête 
?>
