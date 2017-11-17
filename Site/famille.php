<?php
    // connexion a la bdd
    $bdd = new PDO('mysql:host=localhost;dbname=genea;charset=utf8', 'root', 'root');
    //je recupere le contenue d la table personne ... "data"

$data = $bdd->query('SELECT * FROM personne');
?>
<p>
    Le contenue de la table Personne : 
</p> 
<?php

// On affiche chaque entrée une à une
while ($donnees = $data->fetch())
{
?>
 

    <p>
    Le Nom de Famille :<?php echo $donnees['nom']; ?><br />
    Le Prénom :        <?php echo $donnees['prenom']; ?> <br/>
    Papa :   <?php echo $donnees['pere']; ?> <br />
    Maman : <?php echo $donnees['mere']; ?> <br/>
   </p>
<?php 

}  
$data->closeCursor(); // Termine le traitement de la requête 
?>

<!-- Affichage des resultats en JSON --> 


<?php
 
$data = $bdd->query('SELECT * FROM personne');
// On affiche chaque entrée une à une
while ($donnees = $data->fetch())
{
    echo JSON_encode($donnees);
}  
    $data->closeCursor(); // Termine le traitement de la requête 
    ?>