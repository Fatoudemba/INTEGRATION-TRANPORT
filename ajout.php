<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
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
        <div class="form-box">
            <h1>AJOUT_VOITURE</h1>
            <form action="index.php" method="post">
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="nom"name="matricule" placeholder="Matricule" required> 
                </div>

                <div class="input-box">
                    <span class="icon"></span>
                    <input type="nom"name="nbrplace" placeholder="Nombre-Places" required>
                </div>

                <div class="input-box">
                    <span class="icon"></span>
                    <input type="nom"name="chauffeur" placeholder="Nom-Chauffeur" required>
                </div>

                <button type="submit" class="btn">Creer</button><br><br>
                <button type="submit" class="btn"><a href="voiture.php">Verifier</a></button>
            </form>
        </div>
    </div>
    
</body>
</html>