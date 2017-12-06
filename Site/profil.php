
<?php
//echo 'Hello'; 
$bdd = new PDO('mysql:host=localhost;dbname=genea;charset=utf8mb4', 'root', 'root');
//$hash_password= hash('sha256', $password); //Password encryption 
$stmt = $bdd->prepare('SELECT identifiant FROM user WHERE pseudo = :pseudo AND mdp = :pass');
$donnee = $stmt->fetchall(PDO :: FETCH_ASSOC);

$stmt->bindParam(':pseudo',  $_POST['pseudo'],   PDO::PARAM_STR) ;
$stmt->bindParam(':pass',     $_POST ['pass'],    PDO::PARAM_STR) ;
$stmt->execute();
$count=$stmt->rowCount();
$data=$stmt->fetch(PDO::FETCH_ASSOC);
// echo $count ;

echo "Bienvenue   ".$_POST ['pseudo']; 

?>
