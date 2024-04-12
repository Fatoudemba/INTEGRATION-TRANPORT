<?php
    include 'connexion.php';
    session_start();

    if(isset($_POST['connect'])){
        $email=$_POST['email'];
        $mdp=$_POST['mdp'];
        $role=$_POST['role'];

        $req="select id from user where email='$email', mdp='$mdp'and role='$role'";
        $result=mysqli_query($conn, $req);
        if(mysqli_num_rows($result)==1){
            $_SESSION['email']=$email;
            $_SESSION['role']=$role;
            header("location:voiture.php");
        }else{
            $error="nom d'utilisation ou mdp incorrect"; 
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
            background-size:cover;
            background-position:center;
            background-color: #EC2027;
            width: 80%;
            margin: auto;
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
        .input-box i {
            position: absolute;
            right: 20px;
            top: 30%;
            transform: translate(-50%);
            font-size: 20px;
        }
        .wrapper .remember-forgot {
            display: flex;
            justify-content: space-between;
            font-size: 14.5px;
            margin: -15px 0 15px;
        }
        .remember-forgot label input {
            accent-color: #fff;
            margin-right: 3px;
        }
        .remember-forgot a {
            color: #fff;
            text-decoration: none;
        }
        .remember-forgot a:hover {
            text-decoration: underline;
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
        .wrapper .register-link {
            font: size 14.5px;
            text-align:center;
            margin: 20px 0 15px;

        }
        .register-link p a {
            color:#fff;
            text-decoration:none;
            font-weight:600;
        }
        .register-link p a:hover {
            text-decoration:underline;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="form-box Login">
            <h2>Login</h2>
            <form action="voiture.php" method="post">
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="email" placeholder="Usermane" required>
                    <i class='bx bxs-envelope'></i>
                </div>

                <div class="input-box">
                    <span class="icon"></span>
                    <input type="password"placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="input-box">
                    <span class="icon"></span>
                    <input type="role" placeholder="Role" required>
                    <i class='bx bxs-user'></i>
                </div>
                
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember Me</label>
                    <a href="#">Forgot Password?</a>
                </div>

                <button type="submit" class="btn">Login</button>

                <div class="register-link">
                    <p>Vous n'avez pas de compte<a href="inscription.html">Register</a></p>
                </div>
                
            </form>
        </div>
    </div>
    <?php if(isset($error)){echo  "<h3>$error</h3>";}?>

    <script></script>