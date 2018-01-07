
<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=bis_genea;charset=utf8', 'root', 'root');

} 
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }

//$hash_password= hash('sha256', $password); //Password encryption 
$stmt = $bdd->prepare('SELECT identifiant FROM user WHERE pseudo = :pseudo AND mdp = :pass');
$donnee = $stmt->fetchall(PDO :: FETCH_ASSOC);

$stmt->bindParam(':pseudo',   $_POST['pseudo'],   PDO::PARAM_STR) ;
$stmt->bindParam(':pass',     $_POST ['pass'],    PDO::PARAM_STR) ;

$stmt->execute();

$count=$stmt->rowCount();
$data=$stmt->fetch(PDO::FETCH_ASSOC);
// echo $count ;
echo "Bienvenue   ".$_POST ['pseudo']; 
header('Location: index.php');
//exit();
$_SESSION['user'] = $_POST ['pseudo'];
//$_SESSION['user']['nom'] = array ();
//var_dump ($_SESSION);

?>
 