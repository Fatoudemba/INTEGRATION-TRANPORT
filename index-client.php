<?php
                $host="localhost:3307";
                $user="root";
                $md="";
            

                $conn = mysqli_connect($host,$user,$md, 'allou')
                or die("erreur de connection".mysqli_errno($conn));

                echo"connection réussi" ."<br>"; 

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nom= htmlspecialchars($_POST['nom']);
        $prenom= htmlspecialchars($_POST['prenom']);
        $adresse= htmlspecialchars($_POST['adresse']);
        $idr= htmlspecialchars($_POST['idr']);

        echo "<h2>Information recue</h2>";
        echo "<p>NOM:$nom</p>";
        echo "<p>PRENOM-CLIENT:$prenom</p>";
        echo "<p>Adress:$adresse</p>";
    }else{
        echo "Pas de donnees recue";
    }
    $req = "insert into client(nom, prenom, adresse, idr)
    value('$nom', '$prenom', '$adresse', $idr)";

    if(mysqli_query($conn,$req)){
        echo "Enregistrement bien reussi </br>";
    }else{
        echo "Echec d'enregistrement";
    }  
 ?>
 <h3><a href="liste-client.php">verifier client</a></h3>   