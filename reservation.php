<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>

    <style>
           * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        .container {
            width: 80%;
            margin: auto;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.);
        }
        .header-content ul {
            display: flex;
            gap: 40px;
            list-style: none;
        }
        .header-content ul li a {
            text-decoration: none;
            color: black;
            font-weight: 400;
            font-size: 16px;
            top: 10px
        }
        .header-content ul li a:hover {
            color: lightslategray;
        }

        .header-content img {
            height: 35px;
        }

        #dec {
            text-decoration: none;
            color: black;
        }
        #dec i {
            margin-left: 5px;
            color: red;
        }

        
        #dec:hover {
            color: lightslategray;
        }

        .cover {
            background: url(../tp/img/paris.png);
        }
        table {
            width: 100%;
            text-align: center;
            padding-top: 50px;
            border-collapse: collapse;
        }
        th {
            background-color: #EC2027;
            color: white;
        }

        #ajout {
            color: white;
            background-color: #EC2027;
            margin-top: 50px;
            padding: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            margin-left: 35%;
            text-decoration: none;
        }

        span {
            color: red;
        }

        .recherche {
            display:flex;
            justify-content: center;
            padding-bottom: 20px;
        }

        .recherche input {
            padding: 8px;
            width: 300px;
        }
        #click {
            color: white;
            /* margin-top: 10px;
            margin-left: 10px; */
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background-color: #EC2027;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
            <div class="container">
                <header class="header-content">
                    <img src="images/logo.svg" alt="">
                    <nav>
                        <ul>
                            <li><a href="voiture.php">acceuil</a></li>
                            <li><a href=""><span>Nos reservation </span> </a></li>
                            <a id="dec" href="reservation.php">Se deconnecter <i class="fa fa-sign-in"></i></a>
                        </ul>
                    </nav>
                </header>
            </div>
        </header>
    <?php

    include'connexion.php';
    session_start();

    $res = "select reservation.id, reservation.destination, reservation.datedepart,
             reservation.heuredepart, user.email,
              user.mdp, user.role, voiture.matricule, voiture.nbrplace,
               voiture.chauffeur from reservation inner join user on user.id= reservation.idu
                INNER JOIN voiture on voiture.id=reservation.idv";
    $resultat=mysqli_query($conn,$res);
    ?>
    <div class="container">
        <form action="recherche-reserva.php" method="get">
        <div class="recherche">
        <input  name="field" id="search" type="search" >
        <button id="click" name="click" class="fa fa-search"></button>
        </div>
        </form>
    <table>
        <th>Id</th>
        <th>Destination</th>
        <th>Date de Depart</th>
        <th>Heure de Depart</th>
        <th>Suppression</th>
        <th>Modification</th>
        <tr>
        <?php

            while($row= mysqli_fetch_assoc($resultat)){
                echo "<tr>";
                echo "<td>".$row['id'] ."</td>";
                echo "<td>".$row['destination'] ."</td>";
                echo "<td>".$row['datedepart'] ."</td>";
                echo "<td>".$row['heuredepart'] ."</td>";  
                echo "<td> <a href=\"delete_reserva.php?id=$row[id]\"
                onClick=\"return confirm('etes-vous sur?')\">Supprimer</a></td>";
                echo "<td> <a href=\"edit_reserva.php?id=$row[id]\">Modifier</a></td>";
            
        }
        $resultat=mysqli_query($conn,$res);
        ?>
        </tr>
    </table>
        <a id="ajout" href="liste-client.php">Reserver</a>
    </div>
    
</body>
</html>