<!DOCTYPE> 

<html> 
<head>
<title>S'enregister </title>
<link rel="stylesheet" href="css/subscribe.css">
<a href="index.html"><img src="img/logo2.png" alt="logo" width="150" height="150"></a>
</head>
<body> 


        <div id="login"> 
                <form name='form-login' action="ecrire.php" method="post"> <!-- Formulaire de login -->
                    <input name="identifiant" type="text" id="user" placeholder= " Cree un Identifiant">
                    <input name="nom" type="text" id="nom"  placeholder="Nom" >
                    <input name="prenom" type="text" id="prenom" placeholder="Prenom">
                    <input name="mdp" type="password" id"pass" placeholder="mot de passe">

                    Vous estes : 
                    <input type="radio" name="gender" value="female">Femme
                    <input type="radio" name="gender" value="male">Homme </br>
            
                    <input name="nom_pere "type="text" id="nom_pere"  placeholder="Nom et Prenom Papa" >
                    <input name ="nom_mere" type="text" id="nom_mere" placeholder="Nom et Prenom Maman">
                    <input type="submit" value="inscription"> <!-- button submit de connexion --> 
                  
              </form>
</div>

</body>
</html>