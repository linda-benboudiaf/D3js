
<?php
try {
        $bdd = new PDO('mysql:host=localhost;dbname=genea;charset=utf8mb4', 'root', 'root');

} 
catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
      }

 
$stmt = $bdd->prepare ("INSERT INTO user (
                                         pseudo,
                                         nom, 
                                         prenom,
                                         mail,
                                         mdp, 
                                         genre,
                                         pere,
                                         mere)VALUES(:pseudo,:nom,:prenom,:mail,:mdp,:genre,:pere,:mere)");

$stmt->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$stmt->bindParam(':pseudo',             $_POST['pseudo'],  PDO::PARAM_STR);
$stmt->bindParam(':nom',                $_POST['nom'],     PDO::PARAM_STR);
$stmt->bindParam(':prenom',             $_POST['prenom'],  PDO::PARAM_STR);
$stmt->bindParam(':mail',               $_POST['mail'],    PDO::PARAM_STR);
$stmt->bindParam(':mdp',                $_POST['pass'],    PDO::PARAM_STR);
$stmt->bindParam(':genre',              $_POST['gender'],  PDO::PARAM_STR);
$stmt->bindParam(':pere',               $_POST['pere'],    PDO::PARAM_STR);
$stmt->bindParam(':mere',               $_POST['mere'],    PDO::PARAM_STR);

$stmt->execute(); 
echo $stmt->rowCount();
echo $_POST['prenom'];
echo ' vous estes bien enregistré !'; 

?>
<?php
print_r($stmt->errorInfo());
?>

