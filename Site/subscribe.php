<!DOCTYPE> 

<html> 
<head>
<title>S'enregister </title>
<link rel="stylesheet" href="css/subscribe.css">
<a href="index.php"><img src="img/logo3.png" alt="logo" width="100" height="100"></a>
</head>
<body> 


        <div id="login"> 
                <form name='form-sub'    action="ecrire.php" method="post"> <!-- Formulaire de login -->
                    <input name="pseudo" type="text" placeholder= " Cree un Identifiant" required>
                    <input name="nom"    type="text"   placeholder="Nom" required>
                    <input name="prenom" type="text"  placeholder="Prenom">
                    <input name="mail"   type="text"  placeholder="Adresse Mail">
                    <input name="pass"   type="password"  placeholder="mot de passe"required>

                    Vous estes : </br>
                    <input name="gender" type="radio"  value="F">Femme
                    <input name="gender" type="radio"  value="M">Homme </br>

                    <input name="pere" type="text" id="pere"  placeholder="Nom et Prenom Papa" required>
                    <input name ="mere" type="text" id="mere" placeholder="Nom et Prenom Maman"required>

                    <input type="submit" value="inscription"> <!-- button submit de connexion --> 
                  
                </form>
</div>

</body>
</html>