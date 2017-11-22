
<?php
$bdd = new PDO('mysql:host=localhost;dbname=genea;charset=utf8', 'root', 'root');
var_dump($_POST);
/*$req = "INSERT INTO personne  (numpers,
                                            nom, 
                                            prenom,
                                            pere, 
                                            mere,
                                            name_pere, 
                                            name_mere, 
                                            PASSWORD)VALUES(:numpers,
                                                :nom,
                                                :prenom, 
                                                :pere, 
                                                :mere, 
                                                :name_pere , 
                                                :name_mere, 
                                                :PASSWORD)";

$stmt = $bdd->prepare($req);
$stmt->bindParam(':numpers', $_POST['numpers'], PDO::PARAM_STR);
$stmt->bindParam(':nom', $_POST['prenom'], PDO::PARAM_STR);
$stmt->bindParam(':pere', $_POST['pere'], PDO::PARAM_STR);
// use PARAM_STR although a number
$stmt->bindParam(':mere', $_POST['mere'], PDO::PARAM_STR);
$stmt->bindParam(':nom_pere', $_POST['nom_pere'], PDO::PARAM_STR);
$stmt->bindParam(":PASSWORD", $_POST ['PASSWORD'], PDO :: PARAM_STR)
$stmt->execute(); */

echo ' vous estes bien enregistré !'; 
echo $_POST['prenom']; 
?>

<?php
/*
//public bool PDO :: commit (void)  
$bdd = new PDO('mysql:host=localhost;dbname=genea;charset=utf8', 'root', 'root');

$bdd ->beginTransaction();

$sql = 'INSERT INTO personne (numpers,nom, prenom,pere, mere,name_pere, name_mere, PASSWORD)
        VALUES (?,?,?,?,?,?,?,?)';
$valeur = $bdd -> prepare($sql);

foreach($personne as $personne) {
        $valeur -> execute( array(
            $personne -> numpers,
            $personne -> nom ,
            $personne -> prenom,
            $personne -> pere,
            $personne -> mere ,
            $personne -> name_pere,
            $personne -> name_mere,
            $personne -> PASSWORD,
        ));
}

$bdd -> commit () ;
echo ' vous estes bien enregistré !';  */
?>
