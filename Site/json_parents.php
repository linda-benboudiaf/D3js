<?php
header ('Content-Type: application/json'); 
    // connexion a la bdd
    $bdd = new PDO('mysql:host=localhost;dbname=genea;charset=utf8','root','root');
    //je recupere le contenue d la table personne ... "data"

    //$data = $bdd->query('SELECT * FROM personne');


$data = $bdd->query ('SELECT p1.nom, p2.nom, p3.nom 
FROM personne p1 , personne p2, personne p3
where p1.pere = p2.numpers and p1.mere= p3.numpers'); 
// on Récupere les noms et prenoms des parents (Pere et mere)
// On affiche chaque entrée une à une
$donnees = $data->fetchall(PDO :: FETCH_ASSOC); 

    echo json_encode($donnees);

    $data->closeCursor(); // Termine le traitement de la requête 
?>

