<?php session_start(); ?>
<!DOCTYPE> 
<html> 
<?php include ("header.html") ?>

<?php if (!isset($_SESSION['user'])) {?> 

<div id= "cadre"> <button class="log">Connexion</button> 
    <a href="subscribe.php"><input type="button" value="S'enregister !" /></a>
</div> 
<div id= "panel">    
        <form name='form-login' method ="post" action ="profil.php"> <!-- Formulaire de login -->
            <input name = "pseudo" type="text"     id="user" placeholder="Nom d'utilisateur" required>
            <input name =  "pass"  type="password" id="pass" placeholder="mot de passe"      required>
            <input  type= "submit" value=" GO !" /></br></br>
            Premiere visite ? <a href="subscribe.php"><input type="button" value="S'enregister !" /></a>
        </form> 

</div> <?php } else {echo 'Bonjour !    '.$_SESSION ['user']; $_POST['nom'] ;  ?>  
<a href = "logout.php"><button> Deconnexion </button> </a>
   <ol> <a href="about.php">GeneaTree</a> </ol>
    <ol> <a href="home.php">Profil</a> </ol> 
<?php }?> 
<?php if ($_SESSION ['user']= NULL){session_destroy();} ?>  

<body> 
       
<ul>
    <li > <a href="footer.html"> A Propos</a> </li>
    <li > <a href="contact.php">Contact</a> </li>
</ul>

<div class="contenue">
<h1>Genea Tree</h1>
<!--<img src= "img/lili.png" alt="bnr" width="100%" height="160">-->

<!-- je dois mettre un SlideShow ici en inserants des div -->
        <div class="slideshow">

            <div class="slide">
            <img src="img/lili2.png" alt="1" width="100%" height="160">
            </div>
            <div class="slide">
            <img src="img/lili3.png" alt="1" width="100%" height="160">
            </div>
            <a class="prec" onclick="plusSlides(-1)">&#10094;</a>
            <a class="suiv" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
            </div>
<h2>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</h2>
<h2>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</h2>
<p>Nous essayons de faire de <strong> GeneaTree </strong> une encyclopédie francophone de la généalogie, écrite coopérativement par ses utilisateurs. 
    Ce site a été mis en place à l'initiative de Geneanet. </p>
<p> Les sujets traités sur GeneaWiki sont vastes : la généalogie (méthodologie, relevés, généalogie familiale), 
    l'histoire locale ou familiale, l'héraldique, l'onomastique, les faits historiques, ... 
    Tout ce qui touche de près ou de loin à la généalogie !</p>

<button class="img"> Click </button>
<div class="img_affich ">
<img src = "img/img5.png" alt ="img" width ="300" hight="300" >
<img src = "img/img6.png" alt ="img" width ="300" hight="300" >
<img src = "img/img7.png" alt ="img" width ="300" hight="300" >
</div>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Integer ut lacus et nunc porta elementum. Nunc eu ultricies ex.
Nam consequat luctus maximus. Praesent mattis venenatis ante, eget tincidunt eros placerat et. 
Curabitur fringilla nisl lacus, in accumsan odio porttitor nec. Fusce vitae urna vitae urna facilisis tincidunt. Nunc molestie vulputate maximus. 
In sed blandit enim. Vestibulum vehicula consequat diam, 
sit amet accumsan orci faucibus eu. Nulla a elit vitae quam maximus facilisis. Donec nec ultrices purus, vel tempus tellus. Nunc fermentum libero quis ipsum consequat bibendum. Nunc interdum purus eget porta auctor. 
Sed mollis magna sit amet tortor fermentum bibendum. Quisque interdum, ante eu pulvinar congue, metus diam varius ipsum, a suscipit dolor est nec mauris. 
</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Integer ut lacus et nunc porta elementum. Nunc eu ultricies ex.
Nam consequat luctus maximus. Praesent mattis venenatis ante, eget tincidunt eros placerat et. 
Curabitur fringilla nisl lacus, in accumsan odio porttitor nec. Fusce vitae urna vitae urna facilisis tincidunt. Nunc molestie vulputate maximus. 
In sed blandit enim. Vestibulum vehicula consequat diam, 
sit amet accumsan orci faucibus eu. Nulla a elit vitae quam maximus facilisis. Donec nec ultrices purus, vel tempus tellus. Nunc fermentum libero quis ipsum consequat bibendum. Nunc interdum purus eget porta auctor. 
Sed mollis magna sit amet tortor fermentum bibendum. Quisque interdum, ante eu pulvinar congue, metus diam varius ipsum, a suscipit dolor est nec mauris. 
</p>        
</div>

<?php  include ("footer.html")  ?>
</body>
</html>
