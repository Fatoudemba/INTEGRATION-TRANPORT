<?php
    include 'connexion.php';
    session_start();

    if(isset($_POST['connecter'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $adresse=$_POST['adresse'];

        $req="select id from client where nom='$nom', prenom='$prenom'and adresse='$adresse'";
        $result=mysqli_query($conn, $req);
        if(mysqli_num_rows($result)==1){
            $_SESSION['nom']=$nom;
            $_SESSION['adresse']=$adresse;
            header("location:reservation.php");
        }else{
            $error="nom, prenom ou adresse incorrect"; 
        }
    }
    mysqli_close($conn);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
    background-color: #EC2027;
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
.wrapper .input-box {
    width: 100%;
    position: relative;
    height: 50px;
    margin: 30px 0;
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

    </style>
</head>
<body>
    <div class="wrapper">
        <div class="form-box Login">
            <h2>Login</h2>
            <form action="index-client.php" method="post">
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="nom" placeholder="Votre Nom" required>
                </div>

                <div class="input-box">
                    <span class="icon"></span>
                    <input type="prenom"placeholder=" Votre Prenom" required>
                 </div>

                <div class="input-box">
                    <span class="icon"></span>
                    <input type="adresse" placeholder="votre adresse" required>
                </div>

                <button type="submit" class="btn">creer</button>
                <button type="submit" class="btn"><a href="ajout_reserva.php">Reserver</a></button>

            </form>
        </div>
    </div>
    <?php if(isset($error)){echo  "<h3>$error</h3>";}?>

    <script></script>
</body>
</html>