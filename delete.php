<?php

include 'connexion.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "delete from voiture where id =$id");

header("Location:voiture.php");
?>