<?php
                $host="localhost:3307";
                $user="root";
                $md="";
            

                $conn = mysqli_connect($host,$user,$md, 'allou')
                or die("erreur de connection".mysqli_errno($conn));

                echo"connection réussi" ."<br>"; 

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $matricule= htmlspecialchars($_POST['matricule']);
        $nbrplace= htmlspecialchars($_POST['nbrplace']);
        $chauffeur= htmlspecialchars($_POST['chauffeur']);

        echo "<h2>Information recue</h2>";
        echo "<p>Matricule:$matricule</p>";
        echo "<p>Nombre de Place:$nbrplace</p>";
        echo "<p>Chauffeur:$chauffeur</p>";
    }else{
        echo "Pas de donnees recue";
    }
    $req = "insert into voiture(matricule, nbrplace, chauffeur)
    value('$matricule', '$nbrplace', '$chauffeur')";

    if(mysqli_query($conn,$req)){
        echo "Enregistrement bien reussi </br>";
    }else{
        echo "Echec d'enregistrement";
    }  
 ?>
 <h3><a href="voiture.php">verifier l'ajout</a></h3>   