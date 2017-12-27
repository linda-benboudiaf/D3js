<?php
session_unset(); 
session_destroy (); 
$_SESSION ['user']= NULL ; 
header('Location: index.php'); 

?>