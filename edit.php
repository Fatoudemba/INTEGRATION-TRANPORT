<?php
include 'connexion.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $req = "SELECT id,  matricule, nbrplace, chauffeur FROM voiture WHERE id=$id";
    $result = mysqli_query($conn,$req);
    if (mysqli_num_rows($result) > 0) {
        $row = $result->fetch_assoc();
        $matricule= $row['matricule'];
        $nbrplace = $row['nbrplace'];
        $chauffeur = $row['chauffeur'];
    } else {
        echo "Aucun voiture trouvé";
    }
} else {
    echo "Aucun identifiant de voiture spécifié";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier une Voiture</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url(images/soleil.jpg) no-repeat;
            background-size:cover;
            background-position:center;
        }
        .wrapper {
            width: 420px;
            background: transparent;
            border:2px solid rgba(255, 255, 255, .2);
            backdrop-fliter: blur(10px);
            color: #fff;
            border-radius:12px;
            padding:30px 40px;
        }
        .wrapper h1 {
            font-size: 36px;
            text-align: center;
        }
        .wrapper .btn {
            width: 100%;
            height: 45px;
            background: #fff;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            font: size 16px;
            color:#333;
            font-weight:600;
        }
        .wrapper .form{
            width: 100%;
            position: relative;
            height: 50px;
            margin: 30px 0;
        }
        .wrapper .input-box {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 40px;
            font-size: 16px;
            color: #fff;
            padding: 20px 45px 20px 20px;
        }
        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 40px;
            font-size: 16px;
            color: #fff;
            padding: 20px 45px 20px 20px;

        }

        .input-box input::placeholder {
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="form-box">
            <h1>Modifier une Voiture</h1>
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="input-box">
                    <label for="matricule">Matricule:</label><br>
                    <input type="text" id="matricule" name="matricule" value="<?php echo $matricule; ?>"><br><br>
                </div>

                <div class="input-box">
                    <label for="nbrplace">Nombre de Place:</label><br>
                    <input type="text" id="nbrplace" name="nbrplace" value="<?php echo $nbrplace; ?>"><br><br>
                </div>

                <div class="input-box">
                    <label for="ligne">Chauffeur:</label><br>
                    <input type="text" id="chauffeur" name="chauffeur" value="<?php echo $chauffeur; ?>"><br><br>
                </div>

                <button type="submit" class="btn">Modifier</button>
            </form>
        </div>
        
    </div>
   
</body>
</html>

<?php
$conn->close();
?>