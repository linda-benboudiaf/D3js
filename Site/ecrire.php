
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=genea;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{    
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO personne(numpers,nom, prenom,pere, mere,name_pere, name_mere, PASSWORD)
 VALUES(:numpers,:nom, :prenom, :pere, :mere, :name_pere , :name_mere, :PASSWORD)');
$req->execute(array(
    'numpres' => $numpers, 
	'nom' => $nom,
    'prenom' => $prenom,
	'pere' => $pere,
    'mere' => $mere,
    'PASSWORD'=> $PASSWORD,
	));

echo ' vous estes bien enregistré !';
?>
