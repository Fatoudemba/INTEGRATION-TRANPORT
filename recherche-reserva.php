<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
            text-align: center;
        }

        th {
            background-color: #EC2027;
            color: white;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
    
    include'connexion.php';

    ?>
    <h2>Résultats de la recherche :</h2>
    <table>
        <th>Id</th>
        <th>Destination</th>
        <th>Date de Depart</th>
        <th>Heure de Depart</th>
    <tr>
        <?php
        if (isset($_GET['click'])) {

            $field = $_GET['field'];
            
            $sql = "SELECT * FROM reservation WHERE destination  LIKE '%$field%'";
            
            $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                echo'<tr>';
                echo "<td>".$row['id'] ."</td>";
                echo "<td>".$row['destination'] ."</td>";
                echo "<td>".$row['datedepart'] ."</td>";
                echo "<td>".$row['heuredepart'] ."</td>";
            }
        } else {
            echo "Aucun résultat trouvé pour le terme de recherche : " . $field;
        }
    }
    mysqli_close($conn);
        ?>
    </tr>
    </table>
</body>
</html>