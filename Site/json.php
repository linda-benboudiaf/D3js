<?php
header ('Content-Type: application/json'); 
    // connexion a la bdd
    $bdd = new PDO('mysql:host=localhost;dbname=genea;charset=utf8', 'root', 'root');
    //je recupere le contenue d la table personne ... "data"

    //$data = $bdd->query('SELECT * FROM personne');


// a terme, il faudra transformer ces requêtes avec par exemple un ORM
// qui va filtrer pour obtenir un certain nombre de liens et de personnes liés à une personne
// via une méthode recursive
$data = $bdd->query('SELECT numpers AS `id`, groupe AS `group`, prenom AS `prename`, nom AS `name` FROM personne'); // on Récupere la liste des personnes
$data1 = $bdd->query('SELECT numsource AS `source`, numtarget AS `target`, importance AS `value` FROM lien'); // on récupère les liens
// On affiche chaque entrée une à une
$donnees = $data->fetchall(PDO::FETCH_ASSOC); 
$donnees1 = $data1->fetchall(PDO::FETCH_ASSOC); 

$sortie = array("nodes"=> $donnees, 
				"links"=> $donnees1);

    echo json_encode($sortie);
    
    $data->closeCursor(); // Termine le traitement de la requête 
?>
