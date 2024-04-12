<?php 
 $host="localhost:3307";
 $user="root";
 $mdp="";


$conn = mysqli_connect($host, $user, $mdp, "allou") 
or die("erreur de connexion".mysqli_errno($conn));
?>