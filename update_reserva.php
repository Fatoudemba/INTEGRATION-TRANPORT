<?php
include 'connexion.php';

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $destination = $_POST['destination'];
    $datedepart = $_POST['datedepart'];
    $heuredepart = $_POST['heuredepart'];


    $req = "UPDATE reservation SET destination='$destination', 
    datedepart='$datedepart', heuredepart='$heuredepart'  WHERE id=$id";

    if (mysqli_query($conn,$req)) {
        echo "reservation mis à jour avec succès";
        header("Location:reservation.php");
    } else {
        echo "Erreur: " . $req . "<br>";
    }
} else {
    echo "Aucun identifiant de reservation spécifié";
}

mysqli_close($conn);
?>
