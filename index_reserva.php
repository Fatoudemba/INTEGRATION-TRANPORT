<?php
                $host="localhost:3307";
                $user="root";
                $md="";
            

                $conn = mysqli_connect($host,$user,$md, 'allou')
                or die("erreur de connection".mysqli_errno($conn));

                echo"connection réussi" ."<br>"; 

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $destination= htmlspecialchars($_POST['destination']);
        $datedepart= htmlspecialchars($_POST['datedepart']);
        $heuredepart= htmlspecialchars($_POST['heuredepart']);
        $idu= htmlspecialchars($_POST['idu']);
        $idv= htmlspecialchars($_POST['idv']);

        echo "<h2>Information recue</h2>";
        echo "<p>Destination:$destination</p>";
        echo "<p>Date de depart:$datedepart</p>";
        echo "<p>Heure de Depart:$heuredepart</p>";
    }else{
        echo "Pas de donnees recue";
    }
    $req = "insert into reservation(destination, datedepart, heuredepart, idu, idv)
    value('$destination', '$datedepart', '$heuredepart', $idu, $idv)";

    if(mysqli_query($conn,$req)){
        echo "Enregistrement bien reussi </br>";
    }else{
        echo "Echec d'enregistrement";
    }  
 ?>
 <h3><a href="reservation.php">verifier le revervation</a></h3>   