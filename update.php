<?php
include 'connexion.php';

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $matricule = $_POST['matricule'];
    $nbrplace = $_POST['nbrplace'];
    $chauffeur = $_POST['chauffeur'];


    $req = "UPDATE voiture SET matricule='$matricule', 
    nbrplace='$nbrplace', chauffeur='$chauffeur' WHERE id=$id";

    if (mysqli_query($conn,$req)) {
        echo "Voiture mis à jour avec succès";
        header("Location:voiture.php");
    } else {
        echo "Erreur: " . $req . "<br>";
    }
} else {
    echo "";
}

mysqli_close($conn);
?>
