<?php

include 'connexion.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "delete from reservation where id =$id");

header("Location:reservation.php");
?>