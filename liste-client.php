<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <tr bgcolor='#CCCCCC'>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
        </tr>

        <?php 
            include('connexion.php');
 
            $res = "select client.nom, client.prenom, 
            client.adresse, reservation.destination, reservation.datedepart, reservation.heuredepart, 
            reservation.idu, reservation.idv from client inner join 
            reservation on reservation.id= client.idr;";
            $resultat=mysqli_query($conn,$res);
            while($result= mysqli_fetch_assoc($resultat)){
                echo '<tr>';
                echo"<td>".$result['nom']."</td>";
                echo"<td>".$result['prenom']."</td>";
                echo"<td>".$result['adresse']."</td>";
                echo"</tr>";
            }
            ?>
    </table>


    <a href="client.php">Ajouter</a>
</body>
</html>