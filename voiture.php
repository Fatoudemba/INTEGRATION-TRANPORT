<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARTIBUS</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/section.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/jumbo.css">
    <link rel="stylesheet" href="css/slick.css">

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

    <header class="header">
        <div class="container">
            <div class="header-inner">
                <a href="">
                    <img src="images/logo.svg" alt="" class="logo">
                </a>
                <ul class="main-menu">
                    <li>
                        <a href="reservation.php" target="_blank">
                           <span>Nos reservation</span>
                           <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.4">
                            <path d="M7.04166 5.95827L11.4833 1.5166" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.9162 3.68325V1.08325H9.31622" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <path d="M5.95834 1.08325H4.87501C2.16668 1.08325 1.08334 2.16659 1.08334 4.87492V8.12492C1.08334 10.8333 2.16668 11.9166 4.87501 11.9166H8.12501C10.8333 11.9166 11.9167 10.8333 11.9167 8.12492V7.04159" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="user.php" targt="_blank">
                            <span>Se connecter</span>
                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.4">
                                <path d="M7.04166 5.95827L11.4833 1.5166" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.9162 3.68325V1.08325H9.31622" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <path d="M5.95834 1.08325H4.87501C2.16668 1.08325 1.08334 2.16659 1.08334 4.87492V8.12492C1.08334 10.8333 2.16668 11.9166 4.87501 11.9166H8.12501C10.8333 11.9166 11.9167 10.8333 11.9167 8.12492V7.04159" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" targt="_blank">
                            <span>Nous contactez</span>
                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.4">
                                <path d="M7.04166 5.95827L11.4833 1.5166" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.9162 3.68325V1.08325H9.31622" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <path d="M5.95834 1.08325H4.87501C2.16668 1.08325 1.08334 2.16659 1.08334 4.87492V8.12492C1.08334 10.8333 2.16668 11.9166 4.87501 11.9166H8.12501C10.8333 11.9166 11.9167 10.8333 11.9167 8.12492V7.04159" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="jumbo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-sm-12">
                        <div class="jumbo-content">
                            <h1>La mobilite pour tous, Notre <span>priorite</span></h1>
                            <p>Nous voulons une service de transport public de qualite et accessible a tous les
                                senegalais quelle soit leur localite</p>
                            <a href="">Dallal Ak Diam</a>
                        </div>
                    </div>
                </div>

                <!-- Slider -->
                <div class="row">
                    <div class="slideshow">
                        <div class="slideshow-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M16.8 2H6.21001C3.89001 2 2.01001 3.88 2.01001 6.19V12.37V12.56C2.01001 14.88 3.89001 16.75 6.20001 16.75H9.80001C10.35 16.75 10.8 17.2 10.8 17.75V18.57C10.8 19.12 10.35 19.57 9.80001 19.57H7.55001C7.16001 19.57 6.84001 19.89 6.84001 20.28C6.84001 20.67 7.16001 20.99 7.55001 20.99H15.48C15.87 20.99 16.19 20.67 16.19 20.28C16.19 19.89 15.87 19.57 15.48 19.57H13.23C12.68 19.57 12.23 19.12 12.23 18.57V17.75C12.23 17.2 12.68 16.75 13.23 16.75H16.8C19.12 16.75 20.99 14.87 20.99 12.56V12.37V6.19C20.99 3.88 19.11 2 16.8 2Z" fill="white"/>
                                <path d="M19.64 9.5H14.35C12.62 9.5 11.99 10.13 11.99 11.88V19.61C11.99 21.37 12.61 21.99 14.35 21.99H19.64C21.37 21.99 22 21.36 22 19.61V11.88C22 10.12 21.38 9.5 19.64 9.5ZM17 20.32C16.39 20.32 15.9 19.83 15.9 19.22C15.9 18.61 16.39 18.12 17 18.12C17.61 18.12 18.1 18.61 18.1 19.22C18.1 19.83 17.61 20.32 17 20.32Z" fill="white"/>
                                <path opacity="0.4" d="M18.1 19.22C18.1 19.83 17.61 20.32 17 20.32C16.39 20.32 15.9 19.83 15.9 19.22C15.9 18.61 16.39 18.12 17 18.12C17.61 18.12 18.1 18.62 18.1 19.22Z" fill="white"/>
                            </svg>
                                
                            <h4>Nos Valeurs</h4>
                            <p>Nous garantissons une mission de service public moderne multimodal dans
                                 le respect des valeurs d'équité, de professionnalisme et d'innovation</p>
                        </div>
                        <div class="slideshow-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M16.24 2H7.76C5 2 4 3 4 5.81V18.19C4 21 5 22 7.76 22H16.23C19 22 20 21 20 18.19V5.81C20 3 19 2 16.24 2Z" fill="#ffffff"/>
                                <path d="M14 6.25H10C9.59 6.25 9.25 5.91 9.25 5.5C9.25 5.09 9.59 4.75 10 4.75H14C14.41 4.75 14.75 5.09 14.75 5.5C14.75 5.91 14.41 6.25 14 6.25Z" fill="#ffffff"/>
                                <path d="M12 19.3C12.9665 19.3 13.75 18.5165 13.75 17.55C13.75 16.5835 12.9665 15.8 12 15.8C11.0335 15.8 10.25 16.5835 10.25 17.55C10.25 18.5165 11.0335 19.3 12 19.3Z" fill="#ffffff"/>
                            </svg>
                                
                            <h4>Notre Ambition</h4>
                            <p>Mettre en place en système global de transport performant au Sénégal et en Afrique de l'Ouest qui soutienne la vision du Président de la République.</p>
                        </div>
                        <div class="slideshow-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M21.66 10.44L20.68 14.62C19.84 18.23 18.18 19.69 15.06 19.39C14.56 19.35 14.02 19.26 13.44 19.12L11.76 18.72C7.59 17.73 6.3 15.67 7.28 11.49L8.26 7.30001C8.46 6.45001 8.7 5.71001 9 5.10001C10.17 2.68001 12.16 2.03001 15.5 2.82001L17.17 3.21001C21.36 4.19001 22.64 6.26001 21.66 10.44Z" fill="white"/>
                                <path d="M15.06 19.39C14.44 19.81 13.66 20.16 12.71 20.47L11.13 20.99C7.16001 22.27 5.07001 21.2 3.78001 17.23L2.50001 13.28C1.22001 9.30998 2.28001 7.20998 6.25001 5.92998L7.83001 5.40998C8.24001 5.27998 8.63001 5.16998 9.00001 5.09998C8.70001 5.70998 8.46001 6.44998 8.26001 7.29998L7.28001 11.49C6.30001 15.67 7.59001 17.73 11.76 18.72L13.44 19.12C14.02 19.26 14.56 19.35 15.06 19.39Z" fill="white"/>
                            </svg>
                                
                            <h4>visions</h4>
                            <p>Offrir un service public de
                                 transport moderne et adapté aux exigences de mobilité actuelles et futures.</p>
                        </div>
                        <div class="slideshow-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M16.24 2H7.76C5 2 4 3 4 5.81V18.19C4 21 5 22 7.76 22H16.23C19 22 20 21 20 18.19V5.81C20 3 19 2 16.24 2Z" fill="#ffffff"/>
                                <path d="M14 6.25H10C9.59 6.25 9.25 5.91 9.25 5.5C9.25 5.09 9.59 4.75 10 4.75H14C14.41 4.75 14.75 5.09 14.75 5.5C14.75 5.91 14.41 6.25 14 6.25Z" fill="#ffffff"/>
                                <path d="M12 19.3C12.9665 19.3 13.75 18.5165 13.75 17.55C13.75 16.5835 12.9665 15.8 12 15.8C11.0335 15.8 10.25 16.5835 10.25 17.55C10.25 18.5165 11.0335 19.3 12 19.3Z" fill="#ffffff"/>
                            </svg>
                                
                            <h4>Missions</h4>
                            <p>Transporter les personnes et les biens 
                                partout au Sénégal et dans la sous-région avec des moyens sécuritaires</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <section class="section section-white">
            <div class="container">
                <h4 class="text-center section-title">Nos services</h4>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="service">
                            <img src="images/web-dev.svg" alt="">
                            <div class="service-content">
                                <h5>Sécurité</h5>
                                <p>soumis à un programme strict et régulier de maintenance, nos véhicules respectent les normes réglementaires de sécurité.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="service">
                            <img src="images/web-dev.svg" alt="">
                            <div class="service-content">
                                <h5>Expérience passager</h5>
                                <p>Confort des sièges, prises USB, écrans, climatisation… nos véhicules disposent d’équipements de
                                    qualité pour faire du temps de trajet un moment agréable. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="service">
                            <img src="images/web-dev.svg" alt="">
                            <div class="service-content">
                                <h5>Suivi personnalisé</h5>
                                <p>parce que chaque projet est unique, nos équipes accompagnent chaque client, de l’analyse de son besoin jusqu’au suivi de la réalisation de la prestation. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <section class="section section-light">
            <div class="container">
                <h4 class="text-center section-title"> Nos Dernieres</h4>
                <div class="news">
                    <div class="new">
                        <img src="images/buuuus (1).jpeg" alt="">
                        <div class="new-content">
                            <div class="new-date">
                                <img src="images/calendar.svg" alt="">
                                <span>Janvier 8, 2023</span>
                            </div>
                            <h5>L'espoir d'un systeme de transport</h5>
                            <p>Dans le confort, la securite et la ponctualite, PARTIBUS vous facilite la mobilite urbaine,
                                 interurbaine et regionale. PARTIBUS plus qu'une patrimoine.</p>
                        </div>
                    </div>
                    <div class="new">
                        <img src="images/buuuus (3).jpeg" alt="">
                        <div class="new-content">
                            <div class="new-date">
                                <img src="images/calendar.svg" alt="">
                                <span>Novembre 29, 2023</span>
                            </div>
                            <h5>PARTIBUS, poursuit sa percee sur l'international</h5>
                            <p>Les habitudes de mobilité évoluent, c’est pourquoi PARTIBUS s’engage, à opérer des services de mobilité qui répondent
                                aux besoins de tous les citoyens en offrant une expérience immersive </p>
                        </div>
                    </div>
                    <div class="new">
                        <img src="images/buuuus (2).jpeg" alt="">
                        <div class="new-content">
                            <div class="new-date">
                                <img src="images/calendar.svg" alt="">
                                <span>Novembre 7, 2023</span>
                            </div>
                            <h5>Nouvelle lignes pour un meilleure maillage du territoire</h5>
                            <p>Dans l’optique de concrétiser la vision du Président de la République,
                               , la société nationale de transport public de voyageurs, PARTIBUS étend ses tentacules et s’ouvre à de nouveaux partenariats.</p>
                        </div>
                    </div>
                    <div class="new">
                        <img src="images/bus.jpg" alt="">
                        <div class="new-content">
                            <div class="new-date">
                                <img src="images/calendar.svg" alt="">
                                <span>Octobre 15, 2023</span>
                            </div>
                            <h5>Lorem ipsum amet dolor</h5>
                            <p>Scenester helvetica shabby chic, succulents la croix beard trust fund. Whatever narwhal blog bicycle  </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
            <?php

            include'connexion.php';
        
            $req="select * from voiture";
            $result=mysqli_query($conn,$req);
            ?>
            <div class="container">
                <form action="recherche.php" method="get">
                <div class="recherche">
                <input  name="field" id="search" type="search" >
                <button id="click" name="click" class="fa fa-search"></button>
                </div>
                </form>
        
            <table>
                <th>Id</th>
                <th>Matricule</th>
                <th>Nombre de Place</th>
                <th>Chauffeur</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Option</th>
        
        
                <tr>
                <?php
                if(mysqli_num_rows($result) > 0 ){
        
                    while($row=mysqli_fetch_assoc($result)){
                        echo'<tr>';
                        echo'<td>'.$row['id'].'</td>';
                        echo '<td>'.$row['matricule'].'</td>';
                        echo'<td>'.$row['nbrplace'].'</td>';
                        echo'<td>'.$row['chauffeur'].'</td>';
                        echo '<td>'."<a href=delete.php?id=$row[id]>delete </a>".'</td>'; 
                        echo "<td> <a href=\"edit.php?id=$row[id]\">Modifier</a></td>";
                        echo '<td>'."<a href=reservation.php?id=$row[id]>Reserver</a>".'</td>';
                        echo '</tr>';
                        }
                    
                }else {
                    echo"rien trouvée";
                }
                mysqli_free_result($result);
                mysqli_close($conn);
                ?>
                </tr>
            </table>
                <a id="ajout" href="ajout.php">Ajouter une voiture</a>
            </div>
        
    </main>

    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="images/footer logo.png" alt="" class="logo-footer">
    
                        <ul class="footer-contacts">
                            <li>
                                <a href="">
                                    <img src="images/call-white.svg" alt="">
                                    <span>+221 33 600 10 00</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/map-white.svg" alt="">
                                    <span>Alpharetta, Georgia, Senegal</span>
                                </a>
                            </li>
                        </ul>
    
                        <ul class="socials-network">
                            <li><a href="#"><img src="images/github (1).svg" alt=""></a></li>
                            <li><a href="#"><img src="images/facebook (1).svg" alt=""></a></li>
                            <li><a href="#"><img src="images/linkedin (1).svg" alt=""></a></li>
                            <li><a href="#"><img src="images/instagram (1).svg" alt=""></a></li>
                            <li><a href="#"><img src="images/twitter (1).svg" alt=""></a></li>
                        </ul>
    
                    </div>
                    <div class="col-lg-6">
                    </div>
                    <div class="col-lg-3">
                        <h5>Newsletter</h5>
                        <p>PARTIBUS, opérateur public leader des transports terrestres au Sénégal et en Afrique de l'Ouest</p>
                        <form action="" class="newsletter">
                            <input type="text" placeholder="Votre adresse mail">
                            <button type="submit">Subscrib</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <small>Copyright © 2021 Techlabs, Inc. All rights reserved.</small>
                    <ul>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms of Agreement</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="javascript/jquery-3.7.1.min.js"></script>
    <script src="javascript/slick.min.js"></script>
    <script src="javascript/app.js"></script>
    
</body>
</html>
