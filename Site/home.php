<!DOCTYPE> 
<html>
<head>
    <meta charset="utf8">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <a href="index.php"><img onmouseover="zoom(this)" 
     onmouseout="dezoom(this)" src="img/logo3.png" alt="logo" width="120" height="120">
    </a>
    <?php if (isset($_SESSION['user'])) {
    echo 'Bonjour !    '.$_SESSION ['user'] ;?>  
<a href = "logout.php"><button> Deconnexion </button> </a> 
<?php }?> 
<?php if ($_SESSION ['user']= NULL){session_destroy();} ?>  
</head>

<body>

        <ul>
                <li > <a href="about.php">GeneaTree</a> </li>
                <li > <a href="contact.php">Contact</a> </li>
            </ul>
    <div class="contenue">

            <h1>Bienvenue</h1>
            <p>Les noms de famille sont innombrables et très variés. 
            Certains sont aujourd'hui très répandus, d'autres ont totalement disparu. 
            <strong>GeneaTree</strong> recense plusieurs dizaines de milliers de patronymes en tout genre. 
            Découvrez ici leur origine géographique et leur étymologie ! </p>

    <button class="img"> Click </button>
    <div class="img_affich ">
    <img src = "img/img5.png" alt ="img" width ="300" hight="300" >
    <img src = "img/img6.png" alt ="img" width ="300" hight="300" >
    <img src = "img/img7.png" alt ="img" width ="300" hight="300" >
    </div>
        </div>
</body>

<footer class="footer">
    Linda 
    <p>Contact information: <a href="mailto:lbenboudiaf@gmail.com">me@gmail.com</a>.</p>
    <script type="text/javascript" src="js/action.js"></script>
</footer>

</html>
